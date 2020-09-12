<?php namespace Hampel\WndSparkPost\SparkPostMail\EmailBounce;

class Processor extends XFCP_Processor // extends Hampel\SparkPostMail\EmailBounce\Processor
{
	public function stopAllNonTransactional(EmailStop $emailStopper)
	{
		parent::stopAllNonTransactional($emailStopper);

		if ($emailStopper instanceof \Hampel\WhatsNewDigest\XF\Service\User\EmailStop)
		{
			// run our own email stopper now
			$emailStopper->stopWhatsNewDigest();
		}
	}
}
