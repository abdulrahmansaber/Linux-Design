$(function (e) {

  // Desktop Context Menu
  $.contextMenu({
    selector: '.context-menu-one',
    callback: function(key, options) {
        var m = key;
        if (m == 'newfolder') {
          alert('Hello newfolder');
        }
    },
    items: {
      "refresh": { "name": "Refresh" },
      "newwall": { "name": "New Wallpaper" },
      "sep1": "---------",
      "quit": { "name": "Hide All" },
      "newfolder": { "name": "New Folder" },
      "sep2": "---------",
      "view": {
        "name": "View By",
        "items": {
          "medium": { "name": "Medium" },
          "large": { "name": "Large" },
          "extra_small": { "name": "Extra Small" },
        },
      },
      "fold1a": {
          "name": "Order By",
          "items": {
            "fold1a-key1": { "name": "Size" },
            "fold1a-key2": { "name": "Name" },
            "fold1a-key3": { "name": "Date Motified" }
          }
        }
      }

  });

  // Hide Dropdowns Of Toolbar
  $('.desktop').click(function () {
    $('.dropdown').hide();
  });

  // Toolbar
  $('*[open-dropdown]').click(function (e) {
    var vals = $(this).attr('open-dropdown');
    $('.dropdown').each(function () { $(this).hide(); });
    $(".toolbar .right-section .dropdown[must-open='" + vals + "']").toggle();
  });

  // Toolbar Popups
  $('*[open-popup]').click(function () {
    var clicked = $(this).attr('open-popup');
    $('.popup-toolbar[popup-name="' + clicked +'"]').show();
  });

  // Hiding Toolbar popups
  $('.popup-toolbar .header i').click(function () {
    $('.popup-toolbar').hide();
  });

  // Open App Store & Close It
  $('.desktop .overlay .open-app-store').dblclick(function () {
    $('.app-store').css('display', 'block');
  });

  $('.app-store .closing-app').click(function () {
    $('.app-store').css('display', 'none');
  });

  // Open Terminal & Close it
  $('.desktop .overlay .open-terminal').dblclick(function () {
    $('.terminal').css('display', 'block');
  });

  $('.desktop .overlay .close-terminal').click(function () {
    $('.termianl').css('display', 'none');
  });

  // Actions Of Terminal
 $('.open-cmd').on('dblclick', function () {
   $('.terminal').fadeToggle();
 });
 $('.close-cmd').on('click', function () {
   $('.terminal').fadeOut();
 });

 $('.max-cmd').on('click', function () {
   if ($(this).hasClass('unmax')) {
     $('.terminal').css({
       'width': '901px',
       'height': '375px',
       'position': 'fixed',
       'margin-top': '0'
     });
     $('terminal textarea').css('height', '375px');
     $(this).remove('unmax');
   } else {
     $(this).on('click', function () {
       $('.terminal').css({
         'width': '100%',
         'height': '96vh',
         'position': 'absolute',
         'margin-top': '12px'
       });
       $('terminal textarea').css('height', '96vh');
     });
   }

  });

});
