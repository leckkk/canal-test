<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: brand.proto

namespace Api\Brand\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.brand.v1.GetBrandReply</code>
 */
class GetBrandReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.brand.v1.BrandObj brand = 1;</code>
     */
    protected $brand = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Brand\V1\BrandObj $brand
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Brand::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.api.brand.v1.BrandObj brand = 1;</code>
     * @return \Api\Brand\V1\BrandObj|null
     */
    public function getBrand()
    {
        return isset($this->brand) ? $this->brand : null;
    }

    public function hasBrand()
    {
        return isset($this->brand);
    }

    public function clearBrand()
    {
        unset($this->brand);
    }

    /**
     * Generated from protobuf field <code>.api.brand.v1.BrandObj brand = 1;</code>
     * @param \Api\Brand\V1\BrandObj $var
     * @return $this
     */
    public function setBrand($var)
    {
        GPBUtil::checkMessage($var, \Api\Brand\V1\BrandObj::class);
        $this->brand = $var;

        return $this;
    }

}

