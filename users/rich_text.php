<div id="textEditor">
		<div id="theRibbon">
			<button id="boldButton" title="Bold"><b>B</b></button>
			<button id="italicButton" title="Italic"><em>I</em></button>
			<button id="supButton" title="Superscript">X<sup>2</sup></button>
			<button id="subButton" title="Subscript">X<sub>2</sub></button>
			<button id="strikeButton" title="Strikethrough"><s>abc</s></button>
			<button id="orderedListButton" title="Numbered list">(i)</button>
			<button id="unorderedListButton" title="Bulleted list">&bull;</button>
			<input type="color" name="fontColorButton" title="Change Font Color">
			<input type="color" name="highlightButton" title="Highlight Text">
			<select id="fontChanger">
				<option value="Times New Roman">Times New Roman</option>
				<option value="Consolas">Consolas</option>
				<option value="Tahoma">Tahoma</option>
				<option value="Monospace">Monospace</option>
				<option value="Cursive">Cursive</option>
				<option value="Sans-Serif">Sans-Serif</option>
				<option value="Calibri">Calibri</option>
			</select>
			<select id="fontSizeChanger">
				<script type="text/javascript">
					for(var i=1; i<10; i++){
						document.write("<option value='"+i+"'>"+i+"</option>");
					}
				</script>
			</select>
			<button id="linkButton" title="Create Link">Link</button>
			<button id="unlinkButton" title="Remove Link">Unlink</button>
			<button id="undoButton" title="Undo">&larr;</button>
			<button id="redoButton" title="Redo">&rarr;</button>
		</div>
		<div id="richTextArea" name="description">
			<iframe id="theWYSIWYG" name="theWYSIWYG" frameborder="0" class="form-control"></iframe>
		</div>
	</div>