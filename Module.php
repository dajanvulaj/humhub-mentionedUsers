<?php

namespace humhub\modules\mentionedUsers;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function disable()
    {
        foreach (models\Share::find()->all() as $share) {
            $share->delete();
        }

        parent::disable();
    }
}
