// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++
/*!
 * Copyright 2014 Twitter, Inc.
 *
 * Licensed under the Creative Commons Attribution 3.0 Unported License. For
 * details, see http://creativecommons.org/licenses/by/3.0/.
 */
// Intended to prevent false-positive bug reports about Bootstrap not working properly in old versions of IE due to folks testing using IE's unreliable emulation modes.



//function for validation in treatment center search

function enablecity(){
  var state = $("#state option:selected").val();
  if(state=="")
  {
    $('#city').attr("disabled", "disabled");
  }
  else{

    $("#city").removeAttr("disabled");
    state = state.replace(" ", "_");
    alert(state);
    var Gujarat = [ 'Ahmedabad','Vadodara' ];
    var Karnataka = [ 'Bangalore','Mysore' ];
    var Kerala = [ 'Angamaly' ];
    var Madhya_Pradesh = [ 'Bhopal' ];
    var Orissa = [ 'Berhamapur','Bhadrak' ];
    var Bihar = [ 'Bhagalpur' ];
    var Uttar_Pradesh = [ 'Bareilly' ];
    var cities;
    switch (state) {
    case "Gujarat":
        cities=Gujarat;
        break;
    case "Karnataka":
        cities=Karnataka;
        break;
    case "Kerala":
        cities=Kerala;
        break;
    case "Madhya_Pradesh":
        cities=Madhya_Pradesh;
        break;
    case "Orissa":
        cities=Orissa;
        break;
    case "Bihar":
        cities=Bihar;
        break;
    case "Uttar_Pradesh":
        cities=Uttar_Pradesh;
        break;
    }

    var select = $('#city');
    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    $('option', select).remove();
    var index;
    for (index = 0; index < cities.length; index++) {
        var val=cities[index];
        options[options.length] = new Option(val, val);
    }
  }
}

$(document).ready(function(){
  $('.scrollToTop').fadeOut();
  //$("#textbox1").removeAttr("disabled");
    //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });

  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

});



//function for validation in signup page

function displaydate(){
    var month = $("#month option:selected").val();
    var year = $("#year option:selected").val();
    if(month=="" || year=="")
    {
        $('#day').attr("disabled", "disabled");
    }
    else{

        $("#day").removeAttr("disabled");

        var days;
        switch (month) {
            case "Jan":
                days=31;
                break;
            case "Feb":
                days=28;
                if(year%4==0)
                {
                    days=29;
                }
                break;
            case "March":
                days=31;
                break;
            case "April":
                days=30;
                break;
            case "May":
                days=31;
                break;
            case "June":
                days=30;
                break;
            case "July":
                days=31;
                break;
            case "Aug":
                days=31;
                break;
            case "Sep":
                days=30;
                break;
            case "Oct":
                days=31;
                break;
            case "Nov":
                days=30;
                break;
            case "Dec":
                days=31;
                break;
        }

        var select = $('#day');
        if(select.prop) {
            var options = select.prop('options');
        }
        else {
            var options = select.attr('options');
        }
        $('option', select).remove();
        var index;
        for (index = 1; index <= days; index++) {
            options[options.length] = new Option(index, index);
        }
    }
}



(function () {
  'use strict';

  function emulatedIEMajorVersion() {
    var groups = /MSIE ([0-9.]+)/.exec(window.navigator.userAgent)
    if (groups === null) {
      return null
    }
    var ieVersionNum = parseInt(groups[1], 10)
    var ieMajorVersion = Math.floor(ieVersionNum)
    return ieMajorVersion
  }

  function actualNonEmulatedIEMajorVersion() {
    // Detects the actual version of IE in use, even if it's in an older-IE emulation mode.
    // IE JavaScript conditional compilation docs: http://msdn.microsoft.com/en-us/library/ie/121hztk3(v=vs.94).aspx
    // @cc_on docs: http://msdn.microsoft.com/en-us/library/ie/8ka90k2e(v=vs.94).aspx
    var jscriptVersion = new Function('/*@cc_on return @_jscript_version; @*/')() // jshint ignore:line
    if (jscriptVersion === undefined) {
      return 11 // IE11+ not in emulation mode
    }
    if (jscriptVersion < 9) {
      return 8 // IE8 (or lower; haven't tested on IE<8)
    }
    return jscriptVersion // IE9 or IE10 in any mode, or IE11 in non-IE11 mode
  }

  var ua = window.navigator.userAgent
  if (ua.indexOf('Opera') > -1 || ua.indexOf('Presto') > -1) {
    return // Opera, which might pretend to be IE
  }
  var emulated = emulatedIEMajorVersion()
  if (emulated === null) {
    return // Not IE
  }
  var nonEmulated = actualNonEmulatedIEMajorVersion()

  if (emulated !== nonEmulated) {
    window.alert('WARNING: You appear to be using IE' + nonEmulated + ' in IE' + emulated + ' emulation mode.\nIE emulation modes can behave significantly differently from ACTUAL older versions of IE.\nPLEASE DON\'T FILE BOOTSTRAP BUGS based on testing in IE emulation modes!')
  }
})();