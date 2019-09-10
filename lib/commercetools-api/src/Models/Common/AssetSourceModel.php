<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class AssetSourceModel extends JsonObjectModel implements AssetSource
{
    
    public function __construct(
        string $contentType = null,
        string $uri = null,
        string $key = null,
        AssetDimensions $dimensions = null
    ) {
        $this->contentType = $contentType;
        $this->uri = $uri;
        $this->key = $key;
        $this->dimensions = $dimensions;
        
    }

    /**
     * @var ?string
     */
    protected $contentType;
    
    /**
     * @var ?string
     */
    protected $uri;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?AssetDimensions
     */
    protected $dimensions;

    /**
     *
     * @return string|null
     */
    final public function getContentType()
    {
       if (is_null($this->contentType)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AssetSource::FIELD_CONTENT_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->contentType = (string)$data;
       }
       return $this->contentType;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUri()
    {
       if (is_null($this->uri)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AssetSource::FIELD_URI);
           if (is_null($data)) {
               return null;
           }
           $this->uri = (string)$data;
       }
       return $this->uri;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(AssetSource::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return AssetDimensions|null
     */
    final public function getDimensions()
    {
       if (is_null($this->dimensions)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(AssetSource::FIELD_DIMENSIONS);
           if (is_null($data)) {
               return null;
           }
           
           $this->dimensions = AssetDimensionsModel::of($data);
       }
       return $this->dimensions;
    }
    final public function setContentType(?string $contentType): void
    {
        $this->contentType = $contentType;
    }
    
    final public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setDimensions(?AssetDimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }
    
}