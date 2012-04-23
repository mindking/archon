<?php
/**
 * ResearchEmail template
 *
 *
 * The Archon API is available through the variable:
 *
 *  $_ARCHON
 *
 * Refer to the Archon class definition in lib/archon.inc.php
 * for available properties and methods.
 *
 * @package Archon
 * @author Kyle Fox
 */

isset($_ARCHON) or die();
$parts = explode(' | ', $strPageTitle);

$heading = $parts[0];

?>
<h2><?php print $heading; ?></h2>

<div class="userformbox bground">

  <p class="bold"><?php echo($strPageTitle); ?></p>
      Fields marked with an asterisk (<span style="color:red">*</span>) are required.

<?php print $form; ?>

  <div id="userformsubmit">
    <input type="submit" value="<?php echo($strSendEmail); ?>" class="button" />
  </div>

</div>
