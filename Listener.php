<?php namespace Hampel\WndSparkPost;

class Listener
{
	public static function nonTransactionalStopMap(array &$nonTransactionalStopMap)
	{
		// when unsubscribe bounces are received using the 'whatsnewdigest_email' email template, use the
		// 'whatsnewdigest' email stopper

		$nonTransactionalStopMap['whatsnewdigest_email'] = 'whatsnewdigest';
	}
}
