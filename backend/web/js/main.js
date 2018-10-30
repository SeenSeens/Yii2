tinymce.init({
    selector: "textarea#content",
    theme: "modern",
    width: 680,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
   ],
    relative_urls: false,

    filemanager_title:"Responsive Filemanager",
    filemanager_crossdomain: true,
    external_filemanager_path:"http://test.albertoperipolli.com/secondaryserver/rfm0123/",
    external_plugins: { "filemanager" : "http://test.albertoperipolli.com/secondaryserver/rfm0123/plugin.min.js"},
  
   image_advtab: true,
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print preview"
 });