<?php

/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for january theme.
*/


/**
 * Implements hook_form_FORM_ID_alter().
 */

function january_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL) {

    if (isset($form_id)) {
        return;
    }

    $form['january_settings']['social'] = [
      '#type' => 'details',
      '#title' => t('Social And Contact Setting'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
      
    $form['january_settings']['social']['twitter'] = [
      '#type'          => 'textfield',
      '#title'         => t('Twitter'),
      '#default_value' => theme_get_setting('twitter'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
  
    $form['january_settings']['social']['facebook'] = [
      '#type'          => 'textfield',
      '#title'         => t('Facebook'),
      '#default_value' => theme_get_setting('facebook'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
  
    $form['january_settings']['social']['instagram'] = [
      '#type'          => 'textfield',
      '#title'         => t('Instagram'),
      '#default_value' => theme_get_setting('instagram'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];

    $form['january_settings']['social']['youtube'] = [
      '#type'          => 'textfield',
      '#title'         => t('Youtube'),
      '#default_value' => theme_get_setting('youtube'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['january_settings']['social']['phone'] = [
      '#type'          => 'textfield',
      '#title'         => t('Phone'),
      '#default_value' => theme_get_setting('phone'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['january_settings']['social']['email'] = [
      '#type'          => 'textfield',
      '#title'         => t('Email'),
      '#default_value' => theme_get_setting('email'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['january_settings']['social']['address'] = [
      '#type'          => 'textarea',
      '#title'         => t('Address'),
      '#default_value' => theme_get_setting('address'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['january_settings']['social']['management_message'] = [
      '#type'          => 'textarea',
      '#title'         => t('Management Message'),
      '#default_value' => theme_get_setting('management_message'),
      '#description'   => t("Place this text in the widget spot on your site."),
    ];
    $form['january_settings']['footer_logo'] = [
      '#type' => 'details',
      '#title' => t('Footer Logo'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];
    $form['january_settings']['footer_logo']['logo_footer_use'] = array(
      '#type' => 'checkbox',
      '#default_value' => theme_get_setting('logo_footer_use'),
      '#title' => t('Use footer logo'),
      '#description' => t('Uncheck if you not want to use logo in the footer'),
    );

    $form['january_settings']['footer_logo']['logo_footer_image'] = [
      '#title'         => t('Upload Footer logo image'),
      '#description' => t('Please choose a logo to change footer logo. The following file extension are allowed: png | jpg | jpeg | Svg'),
      '#type' => 'managed_file',
      '#default_value' => theme_get_setting('logo_footer_image'),
      '#upload_location' => 'public://logo-footer/',
      '#upload_validators' => array(
          'file_validate_extensions' => array('png jpg jpeg svg'),
      ),
    ];
}

?>