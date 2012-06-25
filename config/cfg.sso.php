<?php
/*
 * Configuration file for Single-Sign-On (SSO) capabilities
 *
 * - Supported providers:
 *   * Facebook
 *   * Google
 *   * Microsoft (Hotmail / MSM / Live)
 *
 * - $LastChangedDate: 2012-06-18 11:37:10 +0200 (Mo, 18 Jun 2012) $
 * - $Rev: 489 $
 */

  $sso_ptotocol = 'https';
  // $sso_endpoint = 'addressbook/hybridauth';
  $sso_endpoint = 'auth';
  
  // https://developers.facebook.com/apps
  $sso_facebook_id     = '';
  $sso_facebook_secret = '';
  
  // https://code.google.com/apis/console/?pli=1#:access
  $sso_google_id       = '';
  $sso_google_secret   = '';
  
  $sso_yahoo_id        = '';
  $sso_yahoo_secret    = '';
  
  // https://manage.dev.live.com/ApplicationOverview.aspx
  $sso_hotmail_id      = '';
  $sso_hotmail_secret  = '';
  
  $sso_twitter_id      = '';
  $sso_twitter_secret  = '';
  
  $sso_log_enabled     = false;
  $sso_log_file        = "";
  
?>