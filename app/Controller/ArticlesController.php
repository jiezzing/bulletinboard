<?php 

	App::uses('Output', 'Directories');
	App::uses('Validate', 'Directories');

	class ArticlesController extends AppController {

		public $uses = array('Article');

		public function index() {
			$articles = $this->Article->find('all', array('order' => 'Article.id DESC'));

			$this->set('page', 'Articles');
			$this->set('articles', $articles);

			$this->render('index');
		}

		public function create() {
			$this->set('page', 'Create Article');

			$this->render('create');
		}

		public function save() {
            $this->autoRender = false;

			if($this->request->is('post')) {
				$hasEmpty = Validate::hasEmptyFields($_POST);

				if($hasEmpty) {
                    $message = Output::message('missingField');
                    $response = Output::error($message);
				}
				else {
					$this->Article->create();

		            $data['title'] = $this->request->data['title'];
		            $data['content'] = $this->request->data['content'];
		            $data['created'] = date('Y-m-d H:m:s');
		            $data['status'] = 1;

		            $this->Article->set($data);

		            if($this->Article->save()) {
	                    $message = Output::message('created');
	                    $response = Output::success($message);
		            }
		            else {
		            	$message = Output::message('error');
	                    $response = Output::error($message);
		            }
				}
			}

			return Output::response($response);
		}

		public function update() {
            $this->autoRender = false;

			if($this->request->is('post')) {
				$hasEmpty = Validate::hasEmptyFields($_POST);

				if($hasEmpty) {
                    $message = Output::message('missingField');
                    $response = Output::error($message);
				}
				else {
		            $data['title'] = $this->request->data['title'];
		            $data['content'] = $this->request->data['content'];

		            $this->Article->read(null, $this->request->data['id']);

		            $this->Article->set($data);

		            if($this->Article->save()) {
	                    $message = Output::message('updated');
	                    $response = Output::success($message);
		            }
		            else {
		            	$message = Output::message('error');
	                    $response = Output::error($message);
		            }
				}
			}

			return Output::response($response);
		}

		public function upvote() {
			$this->autoRender = false;

			if($this->request->is('post')) {
	            $data['vote'] = 1;

	            $this->Article->read(null, $this->request->data['id']);

	            $this->Article->set($data);

	            if($this->Article->save()) {
                    $message = Output::message('upvoted');
                    $response = Output::success($message);
	            }
	            else {
	            	$message = Output::message('error');
                    $response = Output::error($message);
	            }
			}

			return Output::response($response);
		}

		public function downvote() {
			$this->autoRender = false;

			if($this->request->is('post')) {
	            $data['vote'] = 0;

	            $this->Article->read(null, $this->request->data['id']);

	            $this->Article->set($data);

	            if($this->Article->save()) {
                    $message = Output::message('downvoted');
                    $response = Output::success($message);
	            }
	            else {
	            	$message = Output::message('error');
                    $response = Output::error($message);
	            }
			}

			return Output::response($response);
		}

		public function view($id) {
			$articleDetails = $this->Article->findById($id);

			$this->set('page', 'Article Details');
			$this->set('articleDetails', $articleDetails);

			$this->render('view');
		}

		public function edit($id) {
			$articleDetails = $this->Article->findById($id);

			$this->set('page', 'Update Article');
			$this->set('articleDetails', $articleDetails);

			$this->render('edit');
		}

		public function delete() {
			$this->autoRender = false;

			if($this->request->is('post')) {
	            if($this->Article->delete($this->request->data['id'])) {
                    $message = Output::message('deleted');
                    $response = Output::success($message);
	            }
	            else {
	            	$message = Output::message('error');
                    $response = Output::error($message);
	            }
			}

			return Output::response($response);
		}
	}