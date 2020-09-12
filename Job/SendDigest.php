<?php namespace Hampel\WndSparkPost\Job;

use Hampel\SparkPostMail\Option\EmailTransport;

class SendDigest extends XFCP_SendDigest
{
	protected function setUnsubscribe(\XF\Mail\Mail $mail)
	{
		if (EmailTransport::isSparkPostEnabled())
		{
			return $this->app->get('sparkpostmail')->setNonTransactional($mail);
		}

		return parent::setUnsubscribe($mail);
	}
}
