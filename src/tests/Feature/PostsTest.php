<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase; // データベースをリフレッシュしてテストを実行
    
    public function test_posts_page_is_accessible(): void
    {
        $response = $this->get('/posts');

        $response->assertStatus(200); // 投稿ページが正常に表示されることを確認
    }
}
