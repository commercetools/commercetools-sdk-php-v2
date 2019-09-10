<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class OrderSetParcelMeasurementsActionModel extends JsonObjectModel implements OrderSetParcelMeasurementsAction
{
    const DISCRIMINATOR_VALUE = 'setParcelMeasurements';
    public function __construct(
        string $action = null,
        ParcelMeasurements $measurements = null,
        string $parcelId = null
    ) {
        $this->action = $action;
        $this->measurements = $measurements;
        $this->parcelId = $parcelId;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?ParcelMeasurements
     */
    protected $measurements;
    
    /**
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return ParcelMeasurements|null
     */
    final public function getMeasurements()
    {
       if (is_null($this->measurements)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderSetParcelMeasurementsAction::FIELD_MEASUREMENTS);
           if (is_null($data)) {
               return null;
           }
           
           $this->measurements = ParcelMeasurementsModel::of($data);
       }
       return $this->measurements;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getParcelId()
    {
       if (is_null($this->parcelId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderSetParcelMeasurementsAction::FIELD_PARCEL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->parcelId = (string)$data;
       }
       return $this->parcelId;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMeasurements(?ParcelMeasurements $measurements): void
    {
        $this->measurements = $measurements;
    }
    
    final public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }
    
}