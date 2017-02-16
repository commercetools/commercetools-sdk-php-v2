<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class FacetResult extends JsonObject {
    protected $type;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'type';
    public function __construct(array $data = []) {
        $this->type = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'filter' => FilteredFacetResult::class,
        'range' => RangeFacetResult::class,
        'terms' => TermFacetResult::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return FacetResult::class;
    }

    /**
     * @return FacetTypes
     */
    public function getType(): FacetTypes
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, FacetTypes::class);
            } else {
                return Mapper::map([], FacetTypes::class);
            }
        }
        return $this->type;
    }
                
}
