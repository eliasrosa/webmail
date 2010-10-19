/*
 * Classes:
 *  CMessagePicturesController(showPicturesHandler, parent)
 *  CMessageReadConfirmationController(readConfirmationHandler, parent)
 *  CMessageSensivityController()
 */

function CMessagePicturesController(showPicturesHandler, parent)
{
	this._showPicturesHandler = showPicturesHandler;
	this._parent = parent;
	this._fromAddr = '';
	this._offerAlwaysShowPictures = false;
	this._safety = SAFETY_NOTHING;
	this._offerShowPictures = false;
	
	this._container = null;
	this._showPicturesText = null;
}

CMessagePicturesController.prototype =
{
	SetSafety: function (safety)
	{
		this._safety = safety;
		this._offerShowPictures = (this._safety !== SAFETY_SENDER);
		this._setClassName();
	},
	
	SetFromAddr: function (fromAddr)
	{
		this._fromAddr = fromAddr;
		this._offerAlwaysShowPictures = (this._fromAddr.length > 0 && window.UseDb !== false);
		this._setClassName();
	},
	
	_setClassName: function ()
	{
		this._showPicturesText.className = (this._offerShowPictures) ? '' : 'wm_hide';
		this._showAlwaysPicturesText.className = (this._offerAlwaysShowPictures) ? '' : 'wm_hide';
	},
	
	Show: function ()
	{
		this._setClassName();
		this._container.className = (this._offerShowPictures || this._offerAlwaysShowPictures) ? 'wm_safety_info' : 'wm_hide';
	},
	
	Hide: function ()
	{
		this._container.className = 'wm_hide';
	},
	
	GetHeight: function ()
	{
		return this._container.offsetHeight;
	},
	
	ResizeWidth: function (width)
	{
		var paddings = 16;
		this._container.style.width = (width - paddings) + 'px';
	},
	
	ShowPictures: function ()
	{
		this.SetSafety(SAFETY_SENDER);
		this.Show();
		
		this._showPicturesHandler.call(this._parent);
		if (this._parent.Id != SCREEN_NEW_MESSAGE) {
			var msg = this._parent._msgObj;
			WebMail.DataSource.Cache.SetMessageSafety(msg.Id, msg.Uid, msg.FolderId, msg.FolderFullName, SAFETY_SENDER);
		}
	},
	
	ShowPicturesFromSender: function ()
	{
		var xml = '<param name="safety" value="1"/>';
		xml += '<param name="sender">' + GetCData(HtmlDecode(this._fromAddr)) + '</param>';
		RequestHandler('set', 'sender', xml);
		
		this.Hide();
		
		this._showPicturesHandler.call(this._parent);
		if (this._parent.Id != SCREEN_NEW_MESSAGE) {
			var msg = this._parent._msgObj;
			WebMail.DataSource.Cache.SetSenderSafety(msg.FromAddr, SAFETY_MESSAGE);
		}
	},
	
	Build: function (parent)
	{
		this._container = CreateChild(parent, 'div', [['style', 'font:12px Tahoma,Arial,Helvetica,sans-serif;']]);
		
		var span = CreateChild(this._container, 'span');
		this._showPicturesText = span;
		var text = CreateChild(span, 'span');
		text.innerHTML = Lang.PicturesBlocked + '&nbsp;';
		WebMail.LangChanger.Register('innerHTML', text, 'PicturesBlocked', '&nbsp;');
		var a = CreateChild(span, 'a');
		a.innerHTML = Lang.ShowPictures;
		a.href = '#';
		var obj = this;
		a.onclick = function () {
			obj.ShowPictures();
			return false;
		};
		WebMail.LangChanger.Register('innerHTML', a, 'ShowPictures', '');
		text = CreateChild(span, 'span');
		text.innerHTML = '.&nbsp;';
		
		span = CreateChild(this._container, 'span');
		a = CreateChild(span, 'a');
		a.innerHTML = Lang.ShowPicturesFromSender;
		a.href = '#';
		a.onclick = function () {
			obj.ShowPicturesFromSender();
			return false;
		};
		WebMail.LangChanger.Register('innerHTML', a, 'ShowPicturesFromSender', '');
		text = CreateTextChild(span, '.');
		this._showAlwaysPicturesText = span;
		this.Hide();
	}
};

function CMessageReadConfirmationController(readConfirmationHandler, parent)
{
	this._readConfirmationHandler = readConfirmationHandler;
	this._parent = parent;

	this._readConfirmationTbl = null;
}

CMessageReadConfirmationController.prototype =
{
	Show: function ()
	{
		this._readConfirmationTbl.className = 'wm_view_message';
	},

	Hide: function ()
	{
		this._readConfirmationTbl.className = 'wm_hide';
	},

	SendConfirmationMail: function ()
	{
		this.Hide();
		this._readConfirmationHandler.call(this._parent);
	},

	ResizeWidth: function (width)
	{
		var paddings = 16;
		this._readConfirmationTbl.style.width = (width - paddings) + 'px';
	},
	
	Build: function (container)
	{
		var obj = this;
		var tbl = CreateChild(container, 'table');
		this._readConfirmationTbl = tbl;
		tbl.className = 'wm_hide';
		var tr = tbl.insertRow(0);
		var td = tr.insertCell(0);
		td.className = 'wm_safety_info';
		var span = CreateChild(td, 'span');
		var text = CreateChild(span, 'span');
		text.innerHTML = Lang.ReturnReceiptTopText + '&nbsp;';
		WebMail.LangChanger.Register('innerHTML', text, 'ReturnReceiptTopText', '&nbsp;');
		var a = CreateChild(span, 'a');
		a.innerHTML = Lang.ReturnReceiptTopLink;
		a.href = '#';
		a.onclick = function () {
			obj.SendConfirmationMail();
			return false;
		};
		WebMail.LangChanger.Register('innerHTML', a, 'ReturnReceiptTopLink', '');
		return tbl;
	}
};

function CMessageSensivityController()
{
	this._message = null;
}

CMessageSensivityController.prototype =
{
	Show: function (sensivity)
	{
		this._message.className = 'wm_safety_info';
		switch (sensivity) {
			case SENSIVITY_CONFIDENTIAL:
				this._message.innerHTML = Lang.SensivityConfidential;
				break;
			case SENSIVITY_PRIVATE:
				this._message.innerHTML = Lang.SensivityPrivate;
				break;
			case SENSIVITY_PERSONAL:
				this._message.innerHTML = Lang.SensivityPersonal;
				break;
			default:
				this.Hide();
				break;
		}
	},

	Hide: function ()
	{
		this._message.className = 'wm_hide';
	},
	
	GetHeight: function ()
	{
		return this._message.offsetHeight;
	},
	
	ResizeWidth: function (width)
	{
		var paddings = 16;
		this._message.style.width = (width - paddings) + 'px';
	},
	
	Build: function (container)
	{
		this._message = CreateChild(container, 'div');
		this.Hide();
	}
};

if (typeof window.JSFileLoaded != 'undefined') {
	JSFileLoaded();
}