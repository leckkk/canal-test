<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: brand.proto

namespace Api\Brand\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.brand.v1.ListBrandReply</code>
 */
class ListBrandReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.brand.v1.BrandObj brands = 1;</code>
     */
    private $brands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Brand\V1\BrandObj[]|\Google\Protobuf\Internal\RepeatedField $brands
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Brand::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.brand.v1.BrandObj brands = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Generated from protobuf field <code>repeated .api.brand.v1.BrandObj brands = 1;</code>
     * @param \Api\Brand\V1\BrandObj[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBrands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\Brand\V1\BrandObj::class);
        $this->brands = $arr;

        return $this;
    }

}
