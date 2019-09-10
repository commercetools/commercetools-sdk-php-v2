<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ReviewUpdateActionModel extends JsonObjectModel implements ReviewUpdateAction
{
    const DISCRIMINATOR_VALUE = '';
    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @var ?string
     */
    protected $action;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReviewUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    /**
     * @psalm-var array<string, class-string<ReviewUpdateAction> >
     * 
     */
    private static $discriminatorClasses = [
       'setAuthorName' => ReviewSetAuthorNameActionModel::class,
       'setCustomField' => ReviewSetCustomFieldActionModel::class,
       'setCustomType' => ReviewSetCustomTypeActionModel::class,
       'setCustomer' => ReviewSetCustomerActionModel::class,
       'setKey' => ReviewSetKeyActionModel::class,
       'setLocale' => ReviewSetLocaleActionModel::class,
       'setRating' => ReviewSetRatingActionModel::class,
       'setTarget' => ReviewSetTargetActionModel::class,
       'setText' => ReviewSetTextActionModel::class,
       'setTitle' => ReviewSetTitleActionModel::class,
       'transitionState' => ReviewTransitionStateActionModel::class,
    ];
    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ReviewUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = ReviewUpdateAction::DISCRIMINATOR_FIELD;
       if (is_object($value) && isset($value->$fieldName)) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value->$fieldName;
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       if (is_array($value) && isset($value[$fieldName])) {
           /** @var string $discriminatorValue */
           $discriminatorValue = $value[$fieldName];
           if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
           }
       }
       
       /** @psalm-var class-string<ReviewUpdateAction> */
       $type = ReviewUpdateActionModel::class;
       return $type;
    }
}