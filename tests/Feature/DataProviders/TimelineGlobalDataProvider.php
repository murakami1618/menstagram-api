<?php

namespace Tests\Feature\DataProviders;

/**
 * グローバルタイムライン
 *
 * Trait TimelineGlobalDataProvider
 * @package Tests\Feature\DataProviders
 */
trait TimelineGlobalDataProvider
{
    /**
     * 正常系(type)のテストデータの定義
     *
     * @return array
     */
    public function successTypeProvider()
    {
        return [
            'typeがoldのパターン' => ['old'],
            'typeがnewのパターン' => ['new'],
        ];
    }

    /**
     * 異常系(スラープID)のテストデータの定義
     *
     * @return array
     */
    public function failSlurpIdProvider()
    {
        return [
            'slurp_idが文字列のパターン' => ['takashi'],
            'slurp_idが存在しないパターン' => [999],
        ];
    }

    /**
     * 異常系(type)のテストデータの定義
     *
     * @return array
     */
    public function failTypeProvider()
    {
        return [
            'typeが存在しないパターン' => ['takashi'],
        ];
    }
}