<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class Reference extends JsonObject {
    protected $typeId;
    protected $id;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'typeId';
    public function __construct(array $data = []) {
        $this->typeId = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'customer-group' => CustomerGroupReference::class,
        'category' => CategoryReference::class,
        'channel' => ChannelReference::class,
        'product-type' => ProductTypeReference::class,
        'product-discount' => ProductDiscountReference::class,
        'tax-category' => TaxCategoryReference::class,
        'state' => StateReference::class,
        'type' => TypeReference::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return Reference::class;
    }

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        if (is_null($this->typeId)) {
            $value = $this->raw('typeId');
            if (!is_null($value)) {
                $this->typeId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->typeId;
    }
                

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                
}
