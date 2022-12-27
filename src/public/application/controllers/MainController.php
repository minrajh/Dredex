<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller {

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postList($this->route),
		];
		$this->view->render('Главная | DREDEX', 'ключевое слово', 'Описание', $vars);
	}

	public function servicesAction() {
		$this->view->render('Услуги | DREDEX', 'ключевое слово', 'Описание');
	}

	public function portfolioAction() {
		$this->view->render('Наше портфолио | DREDEX', 'ключевое слово', 'Описание');
	}

	public function postAction() {
		$adminModel = new Admin($this->route, $this->model->postCount());
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
			'list' => $this->model->postList($this->route),
		];
	$this->view->render('Посты | DREDEX', 'ключевое слово', 'Описание', $vars);
	}

	public function approachAction() {
		$this->view->render('О нас | DREDEX', 'ключевое слово', 'Описание');
	}

	public function aboutAction() {
		$this->view->render('О нас | DREDEX', 'ключевое слово', 'Описание');
	}

	public function privacyAction() {
		$this->view->render('Политика конфиденциальности | DREDEX', 'ключевое слово', 'Описание');
	}

	public function termsAction() {
		$this->view->render('Пользовательское соглашение | DREDEX', 'ключевое слово', 'Описание');
	}

	public function errorAction() {
		$this->view->render('404 Страница не найдена | DREDEX', 'ключевое слово', 'Описание');
	}

	public function contactAction() {
		$this->view->render('Контакты | DREDEX', 'ключевое слово', 'Описание');
	}

}