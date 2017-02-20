<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountValue extends JsonObject {
    protected $type;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'type';
    public function __construct(array $data = []) {
        $this->type = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'absolute' => ProductDiscountValueAbsolut::class,
        'external' => ProductDiscountValueExternal::class,
        'relative' => ProductDiscountValueRelative::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return ProductDiscountValue::class;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = (string)$value;
            } else {
                return '';
            }
        }
        return $this->type;
    }
                
}
