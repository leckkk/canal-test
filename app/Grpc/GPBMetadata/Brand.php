<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: brand.proto

namespace GPBMetadata;

class Brand
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
brand.protoapi.brand.v1"$
BrandObj

id (
name (	""
CreateBrandRequest
name (	"
CreateBrandReply".
UpdateBrandRequest

id (
name (	"
UpdateBrandReply" 
DeleteBrandRequest

id ("
DeleteBrandReply"
GetBrandRequest

id ("6
GetBrandReply%
brand (2.api.brand.v1.BrandObj"
ListBrandRequest"8
ListBrandReply&
brands (2.api.brand.v1.BrandObj2�
BrandO
CreateBrand .api.brand.v1.CreateBrandRequest.api.brand.v1.CreateBrandReplyO
UpdateBrand .api.brand.v1.UpdateBrandRequest.api.brand.v1.UpdateBrandReplyO
DeleteBrand .api.brand.v1.DeleteBrandRequest.api.brand.v1.DeleteBrandReplyF
GetBrand.api.brand.v1.GetBrandRequest.api.brand.v1.GetBrandReplyI
	ListBrand.api.brand.v1.ListBrandRequest.api.brand.v1.ListBrandReplyB(
api.brand.v1PZbrands/api/brand/v1;v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

