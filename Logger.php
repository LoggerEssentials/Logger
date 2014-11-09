<?php
namespace Logger;

use Psr\Log\LoggerInterface;

interface Logger extends LoggerInterface {
	/**
	 * System is unusable.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function emergency($message, array $context = array());

	/**
	 * Action must be taken immediately.
	 *
	 * Example: Entire website down, database unavailable, etc. This should
	 * trigger the SMS alerts and wake you up.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function alert($message, array $context = array());

	/**
	 * Critical conditions.
	 *
	 * Example: Application component unavailable, unexpected exception.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function critical($message, array $context = array());

	/**
	 * Runtime errors that do not require immediate action but should typically
	 * be logged and monitored.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function error($message, array $context = array());

	/**
	 * Exceptional occurrences that are not errors.
	 *
	 * Example: Use of deprecated APIs, poor use of an API, undesirable things
	 * that are not necessarily wrong.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function warning($message, array $context = array());

	/**
	 * Normal but significant events.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function notice($message, array $context = array());

	/**
	 * Interesting events.
	 *
	 * Example: User logs in, SQL logs.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function info($message, array $context = array());

	/**
	 * Detailed debug information.
	 *
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function debug($message, array $context = array());

	/**
	 * Logs with an arbitrary level.
	 *
	 * @param string $level See Psr\Log\LogLevel::*
	 * @param string $message The message MUST be a string or object implementing __toString().
	 * @param array $context The context array can contain arbitrary data, the only assumption that can be made by implementors is that if an Exception instance is given to produce a stack trace, it MUST be in a key named "exception".
	 * @return void
	 */
	public function log($level, $message, array $context = array());
}
