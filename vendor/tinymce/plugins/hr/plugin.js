(function () {
var hr = (function () {
  'use strict';

  var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

  var register = function (editor) {
    editor.addCommand('InsertHorizontalRule', function () {
      editor.execCommand('mceInsertContent', false, '<hr />');
    });
  };
  var $_fuetylc4jglr4tjy = { register: register };

  var register$1 = function (editor) {
    editor.addButton('hr', {
      icon: 'hr',
      tooltip: 'Horizontal line',
      cmd: 'InsertHorizontalRule'
    });
    editor.addMenuItem('hr', {
      icon: 'hr',
      text: 'Horizontal line',
      cmd: 'InsertHorizontalRule',
      context: 'insert'
    });
  };
  var $_9wbqnsc5jglr4tke = { register: register$1 };

  global.add('hr', function (editor) {
    $_fuetylc4jglr4tjy.register(editor);
    $_9wbqnsc5jglr4tke.register(editor);
  });
  function Plugin () {
  }

  return Plugin;

}());
})();
