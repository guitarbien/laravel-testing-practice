<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleControllerTest extends TestCase
{
    public function testArticleList()
    {
        // 用 GET 方法瀏覽網址 /articles
        $this->call('GET', '/articles');

        // 改用 Laravel 內建方法
        // 實際就是測試是否為 HTTP 200
        $this->assertResponseOk();

        // 應取得 articles 變數
        $this->assertViewHas('articles');
    }
}
