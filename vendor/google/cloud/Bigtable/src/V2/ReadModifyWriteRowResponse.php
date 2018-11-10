<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for Bigtable.ReadModifyWriteRow.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ReadModifyWriteRowResponse</code>
 */
class ReadModifyWriteRowResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A Row containing the new contents of all cells modified by the request.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Row row = 1;</code>
     */
    private $row = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\Row $row
     *           A Row containing the new contents of all cells modified by the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * A Row containing the new contents of all cells modified by the request.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Row row = 1;</code>
     * @return \Google\Cloud\Bigtable\V2\Row
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * A Row containing the new contents of all cells modified by the request.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Row row = 1;</code>
     * @param \Google\Cloud\Bigtable\V2\Row $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Row::class);
        $this->row = $var;

        return $this;
    }

}

