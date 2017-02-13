<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class GeoJson extends JsonObject {
    protected $type;
    protected $coordinates;

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'type';
    public function __construct(array $data = []) {
        $this->type = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'Point' => GeoJsonPoint::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return GeoJson::class;
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
                

    /**
     * @return array
     */
    public function getCoordinates(): array
    {
        if (is_null($this->coordinates)) {
            $value = $this->raw('coordinates');
            if (!is_null($value)) {
                $this->coordinates = $value;
            } else {
                return [];
            }
        }
        return $this->coordinates;
    }
                
}
