function InitializeIFrame()
    {               
        document.body.contentEditable = true;               
    }
		var fonts=document.querySelectorAll("select#fontChanger > option");
		for( var i=0; i < fonts.length; i++){
			fonts[i].style.fontFamily=fonts[i].value;
		}

		window.addEventListener("load",function(){
			var editor=theWYSIWYG.document;
			editor.designMode="on";
			boldButton.addEventListener("click",function(){
				editor.execCommand("Bold",false,null);
			},false);

			italicButton.addEventListener("click",function(){
				editor.execCommand("Italic",false,null);
			},false);
			supButton.addEventListener("click",function(){
				editor.execCommand("Superscript",false,null);
			},false);
			subButton.addEventListener("click",function(){
				editor.execCommand("Subscript",false,null);
			},false);
			strikeButton.addEventListener("click",function(){
				editor.execCommand("Strikethrough",false,null);
			},false);
			orderedListButton.addEventListener("click",function(){
				editor.execCommand("InsertOrderedList",false,"new" + Math.round(Math.random()));
			},false);
			unorderedListButton.addEventListener("click",function(){
				editor.execCommand("InsertUnorderedList",false,"new" + Math.round(Math.random()));
			},false);
			// fontColorButton.addEventListener("change",function(event){
			// 	editor.execCommand("ForeColor",false,event.target.value);
			// },false);
			// highlightButton.addEventListener("change",function(event){
			// 	editor.execCommand("BackColor",false, event.target.value);
			// },false);
			fontChanger.addEventListener("change", function(event){
				editor.execCommand("FontName", false, event.target.value);
			},false);
			fontSizeChanger.addEventListener("change", function(event){
				editor.execCommand("FontSize", false, event.target.value);
			},false);
			linkButton.addEventListener("click",function(){
				var url=prompt("Enter a URL","http://");
				editor.execCommand("CreateLink",false,url);
			},false);
			// unLinkButton.addEventListener("click",function(){
			// 	editor.execCommand("UnLink",false,null);
			// },false);
			undoButton.addEventListener("click",function(){
				editor.execCommand("undo",false,null);
			},false);
			redoButton.addEventListener("click",function(){
				editor.execCommand("redo",false,null);
			},false);

		},false);