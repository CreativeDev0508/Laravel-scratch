// SimpleMDE instantiation
var simplemde = new SimpleMDE({
    element: document.getElementById("body"),
    toolbar: [
    	"bold",
    	"italic",
    	"heading",
    	"|",
    	"quote",
    	"unordered-list",
    	"ordered-list",
    	"|",
    	"link",
    	"image",
    	"|",
    	"fullscreen",
    	"guide"
    ]
});

// function drawRedText(editor) {

//     var cm = editor.codemirror;
//     var output = '';
//     var selectedText = cm.getSelection();
//     var text = selectedText || 'placeholder';

//     output = '!!' + text + '!!';
//     cm.replaceSelection(output);

// }