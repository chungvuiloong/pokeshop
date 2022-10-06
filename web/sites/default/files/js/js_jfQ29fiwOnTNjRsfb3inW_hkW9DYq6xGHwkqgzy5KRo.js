(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.LayoutBuilderLock = {
    attach: function () {

      // Explicitly set display block on the form items. In some circumstances
      // the checkboxes are aligned left, so fix it here since this file
      // is loaded anyway.
      $('.layout-builder-lock-section-settings .form-item').css('display', 'block');

      // Default value for the toggle all checkbox.
      let defaultChecked = $('.layout-builder-lock-section-settings .form-checkboxes .form-checkbox:checked').length === $('.layout-builder-lock-section-settings .form-checkboxes .form-checkbox').length;

      // Prepend the toggle all checkbox.
      let checkbox = '<div class="form-type-checkbox form-item">';
      checkbox += '<input type="checkbox" class="layout-builder-lock-toggle-all form-checkbox" id="layout-builder-lock-toggle-all" /> ';
      checkbox += '<label class="option" for="layout-builder-lock-toggle-all">' + Drupal.t('Toggle all') + '</label>';
      checkbox += '</div>';
      $('.layout-builder-lock-section-settings .form-checkboxes').prepend(checkbox);

      let $toggleAll = $('.layout-builder-lock-toggle-all');

      // Set default value.
      $toggleAll.prop('checked', defaultChecked);

      // Listen on change.
      $toggleAll.on('change', function() {
        let checked = false;
        if ($(this).prop('checked')) {
          checked = true;
        }
        $('.layout-builder-lock-section-settings .form-checkboxes .form-checkbox').prop('checked', checked);
      });

    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Behaviors Bootstrap Layout Builder general scripts.
 */

(function ($, _, Drupal, drupalSettings) {
  "use strict";

  // Configure Section.
  Drupal.behaviors.bootstrapLayoutBuilderConfigureSection = {
    attach: function (context) {
      // Custom solution for Bootstrap 3 Drupal theme.
      $('input.blb_container_type', context).each(function() {
        var checked = $(this).prop("checked");
        if (typeof checked !== typeof undefined && checked !== false) {
          $(this).parent('label').addClass('active');
        }
      });

      // Custom solution for Bootstrap 3 & Bario Drupal themes.
      $('.blb_container_type .fieldset-wrapper label', context).on('click', function () {
        $(this).parents('.fieldset-wrapper').find('label').removeClass('active');
        $(this).parents('.fieldset-wrapper').find('input').prop("checked", false);
        $(this).parent().find('input').prop('checked', true);
        $(this).addClass('active');
      });

      // Graphical Layout Columns
      $('.blb_breakpoint_cols', context).each(function () {
        const numOfCols = 12;
        // .custom-control, .custom-radio to solve Bario issues.
        $(this).find('.form-item, .custom-control, .custom-radio').each(function () {
          var cols = $(this).find('input').val().replace('blb_col_', '');
          var colsConfig = cols.split('_');
          var colsLabel = $(this).find('label');
          var col_classes = 'blb_breakpoint_col';
          var checked = $(this).find('input').prop("checked");
          if (typeof checked !== typeof undefined && checked !== false) {
            col_classes += ' bp-selected';
          }

          // Wrap our radio labels and display as a tooltip.
          colsLabel.wrapInner('<div class="bs_tooltip bs_tooltip-lg"></div>');

          // Provide a graphical representation of the columns via some nifty divs styling.
          $.each(colsConfig, function(index, value) {
            var width = ((value / numOfCols) * 100);
            $('<div />', {
              'text': width.toFixed(0) + '%',
              'style': 'width:' + width + '%;',
              'class': col_classes,
            })
            .appendTo(colsLabel)
            .on('click', function () {
              $(this).parents('.blb_breakpoint_cols').find('.blb_breakpoint_col').removeClass('bp-selected');
              $(this).parents('.blb_breakpoint_cols').find('input').prop("checked", false);
              $(this).parents('label').parent().find('input').prop("checked", true);
              $(this).parents('label').find('.blb_breakpoint_col').addClass('bp-selected');
            });

          });
        });

      });

      // Auto-sized textareas.
      $('textarea.blb-auto-size', context).each(function() {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;min-height:60px!important;padding:.65rem 1rem;');
      });

    }
  };

})(window.jQuery, window._, window.Drupal, window.drupalSettings);
;
