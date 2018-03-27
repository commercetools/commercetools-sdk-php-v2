<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CategoryUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addAsset' => Types\Category\CategoryAddAssetAction::class,
        'changeAssetName' => Types\Category\CategoryChangeAssetNameAction::class,
        'changeAssetOrder' => Types\Category\CategoryChangeAssetOrderAction::class,
        'changeName' => Types\Category\CategoryChangeNameAction::class,
        'changeOrderHint' => Types\Category\CategoryChangeOrderHintAction::class,
        'changeParent' => Types\Category\CategoryChangeParentAction::class,
        'changeSlug' => Types\Category\CategoryChangeSlugAction::class,
        'removeAsset' => Types\Category\CategoryRemoveAssetAction::class,
        'setAssetCustomField' => Types\Category\CategorySetAssetCustomFieldAction::class,
        'setAssetCustomType' => Types\Category\CategorySetAssetCustomTypeAction::class,
        'setAssetDescription' => Types\Category\CategorySetAssetDescriptionAction::class,
        'setAssetKey' => Types\Category\CategorySetAssetKeyAction::class,
        'setAssetSources' => Types\Category\CategorySetAssetSourcesAction::class,
        'setAssetTags' => Types\Category\CategorySetAssetTagsAction::class,
        'setCustomField' => Types\Category\CategorySetCustomFieldAction::class,
        'setCustomType' => Types\Category\CategorySetCustomTypeAction::class,
        'setDescription' => Types\Category\CategorySetDescriptionAction::class,
        'setExternalId' => Types\Category\CategorySetExternalIdAction::class,
        'setKey' => Types\Category\CategorySetKeyAction::class,
        'setMetaDescription' => Types\Category\CategorySetMetaDescriptionAction::class,
        'setMetaKeywords' => Types\Category\CategorySetMetaKeywordsAction::class,
        'setMetaTitle' => Types\Category\CategorySetMetaTitleAction::class,

    ];

}
