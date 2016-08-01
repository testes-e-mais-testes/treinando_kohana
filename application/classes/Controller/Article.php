<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Article extends Controller {
    
    const INDEX_PAGE = 'Article';
    
    public function action_index() {
        $articles = ORM::factory('Article')->find_all();
        
        $view = new View('Article/index');
        $view->set('articles', $articles);
        
        $this->response->body($view);
    }
    // load article
    public function action_new() {
        $article = new Model_Article();
        
        $view = new View('Article/edit');
        $view->set('article', $article);
        
        $this->response->body($view);
    }
    // edit article
    public function action_edit() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
        
        $view = new View('Article/edit');
        $view->set('article', $article);
        
        $this->response->body($view);
    }
    //delete article
    public function action_delete() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
        
        $article->delete();
        
        $this->redirect('Article');
    }
    // save article
    public function action_post() {
        $article_id = $this->request->param('id');
        $article = new Model_Article($article_id);
        
        $article->Values($_POST);
        $article->save();
        
        $this->redirect('Article');
    }
    
}