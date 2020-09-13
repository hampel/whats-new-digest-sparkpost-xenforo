<?php namespace Hampel\WndSparkPost\Job;

use Hampel\SparkPostMail\Option\EmailTransport;

class SendDigest extends XFCP_SendDigest
{
	protected function setUnsubscribe(\XF\Mail\Mail $mail)
	{
		if (EmailTransport::isSparkPostEnabled())
		{
			$message = $mail->getMessageObject();

			if ($message instanceof \Hampel\SparkPostDriver\Message)
			{
				// Swiftmail v6 from SparkPostMail v2
				return $mail->setTransactional(false);
			}

			if ($message instanceof \SwiftSparkPost\Message)
			{
				// Swiftmail v5 from SparkPostMail v1
				return $this->app->get('sparkpostmail')->setNonTransactional($mail);
			}

			\XF::logError("Unknown message object in Hampel\WndSparkPost\Job\SendDigest");
		}

		return parent::setUnsubscribe($mail);
	}
}
