<?php

namespace Hampel\WndSparkPost;

use XF\AddOn\AbstractSetup;

class Setup extends AbstractSetup
{
	public function install(array $stepParams = [])
	{
		// nothing to do
	}

	public function upgrade(array $stepParams = [])
	{
		// nothing to do
	}

	public function uninstall(array $stepParams = [])
	{
		// nothing to do
	}

	/**
	 * Perform additional requirement checks.
	 *
	 * @param array $errors Errors will block the setup from continuing
	 * @param array $warnings Warnings will be displayed but allow the user to continue setup
	 *
	 * @return void
	 */
	public function checkRequirements(&$errors = [], &$warnings = [])
	{
		if (\XF::$versionId >= 2020000)
		{
			$errors[] = 'This version of Hampel/WndSparkPost is not compatible with XenForo v2.2 - please install v2.x of the What\'s New Digest adapter for SparkPost addon';
		}
	}
}