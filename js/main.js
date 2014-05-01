$(document).ready(function() {
  var databaseMore = $('#database-more');
  var databaseMoreSettings = $('#database-more-settings');
  var installationProfileSelect = $('#installation-profile');
  var installationProfileOther = $('#installation-profile-other');
  var databasePort = $('#database-port');
  var advancedSettings = $('#advanced-settings');
  var advancedSettingsFieldsets = advancedSettings.find('fieldset');
  var advancedSettingsTrigger = advancedSettings.find('#advanced-settings-trigger');
  var code = $('#code');
  var copyCode = $('#copy-code');

  ZeroClipboard.setMoviePath('js/ZeroClipboard.swf');

  var clip = new ZeroClipboard.Client();
  clip.setHandCursor(true);
  clip.setCSSEffects(true);
  clip.glue('copy-code', 'copy-code-wrapper');
  clip.addEventListener('onComplete', function() {
    copyCode.text('Copied!');
  });

  copyCode.data('original-text', copyCode.text());
  databaseMoreSettings.hide();
  installationProfileOther.hide();
  advancedSettings.find('fieldset').hide();

  databaseMore.bind('change', function() {
    var checked = databaseMore.is(':checked');

    if(checked) {
      databaseMoreSettings.show();
    } else {
      databaseMoreSettings.hide();
    }
  });

  installationProfileSelect.bind('change', function() {
    var val = installationProfileSelect.val();
    var name = installationProfileSelect.attr('name');
    if(val == '_other') {
      installationProfileOther.show().attr('required', 'required').attr('name', name).focus();
    } else {
      installationProfileOther.hide().removeAttr('required', 'name');
    }
  });

  databasePort.bind('change', function() {
    var val = databasePort.val();
    if(val.indexOf('-') == '0') {
      databasePort.val('0');
    }
  });

  advancedSettingsTrigger.bind('change', function() {
    var checked = advancedSettingsTrigger.is(':checked');

    if(checked) {
      advancedSettingsFieldsets.show();
    } else {
      advancedSettingsFieldsets.hide();
    }
  });

  if(advancedSettings.find('input[type!="checkbox"][value!=""]').length) {
    advancedSettingsTrigger.attr('checked', 'checked').trigger('change');
  }

  $('form').bind('submit', function() {
    var that = $(this);
    var action = that.attr('action');

    $.ajax({
      url: action,
      data: that.serialize(),
      type: 'post',
      success: function(command) {
        code.text(command).parent().css('visibility', 'visible');
        copyCode.text(copyCode.data('original-text'));
        clip.setText(command);
      },
    });

    return false;
  });

});
