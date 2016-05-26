<php>
$fb = new Facebook\Facebook([
  'app_id' => ''214445705596296'',
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.6',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
</php>