<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2\Breakpoint;

/**
 * Log severity levels.
 *
 * Protobuf type <code>google.devtools.clouddebugger.v2.Breakpoint.LogLevel</code>
 */
class LogLevel
{
    /**
     * Information log message.
     *
     * Generated from protobuf enum <code>INFO = 0;</code>
     */
    const INFO = 0;
    /**
     * Warning log message.
     *
     * Generated from protobuf enum <code>WARNING = 1;</code>
     */
    const WARNING = 1;
    /**
     * Error log message.
     *
     * Generated from protobuf enum <code>ERROR = 2;</code>
     */
    const ERROR = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LogLevel::class, \Google\Cloud\Debugger\V2\Breakpoint_LogLevel::class);

