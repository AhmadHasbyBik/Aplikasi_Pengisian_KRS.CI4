<?php

namespace App\Controllers;
use App\Models\m_Mahasiswa;
use App\Models\m_Semester;
use App\Models\m_Jurusan;
use App\Models\m_Custom;
use App\Models\m_KRS;

class Mahasiswa extends BaseController
{
	protected $m_Semester;
	protected $m_Jurusan;
	protected $m_Mahasiswa;
	protected $m_Custom;
	protected $m_KRS;

	public function __construct()
	{
		$this->m_Semester = new m_Semester();
		$this->m_Jurusan = new m_Jurusan();
		$this->m_Mahasiswa = new m_Mahasiswa();
		$this->m_Custom = new m_Custom();
		$this->m_KRS = new m_KRS();
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard Mahasiswa',
			'user' => $this->m_Mahasiswa->where('npm_mhs', session()->get('npm'))->first(),
		];
		return view('mahasiswa/dashboard', $data);
	}

	public function listMahasiswa()
	{
		$data = [
			'title' => 'Mahasiswa',
			'datamahasiswa' => $this->m_Mahasiswa->findAll(),
		];
		return view('mahasiswa/index', $data);
	}

	public function tambahMahasiswa()
	{
		$data = [
			'title' => 'Tambah Mahasiswa',
			'dataJurusan' => $this->m_Jurusan->findAll(),
			'dataSemester' => $this->m_Semester->findAll(),
		];
		return view('mahasiswa/tambah', $data);
	}

	public function editMahasiswa($npm_mhs)
	{
		$data = [
			'title' => 'Edit Mahasiswa',
			'mahasiswa' => $this->m_Mahasiswa->where('npm_mhs', $npm_mhs)->first(),
			'dataJurusan' => $this->m_Jurusan->findAll(),
			'dataSemester' => $this->m_Semester->findAll(),
		];

		return view('mahasiswa/edit', $data);
	}

	public function editMahasiswaByMahasiswa($npm_mhs)
	{
		$data = [
			'title' => 'Settings',
			'mahasiswa' => $this->m_Mahasiswa->where('npm_mhs', $npm_mhs)->first(),
			'dataJurusan' => $this->m_Jurusan->findAll(),
			'dataSemester' => $this->m_Semester->findAll(),
			'user' => $this->m_Mahasiswa->where('npm_mhs', session()->get('npm'))->first(),
		];

		return view('mahasiswa/edit_mhs', $data);
	}

	public function deleteMahasiswa($npm_mhs)
	{
		$this->m_Mahasiswa->delete($npm_mhs);
		return redirect()->to('admin/mahasiswa');
	}

	public function prosesTambahMahasiswa()
	{
		$rules = $this->validate([
			'npm_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'npm mahasiswa harus diisi'
				]	
			],

			'nama_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama mahasiswa harus diisi'
				]	
			],

			'tgl_lahir_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tanggal lahir mahasiswa harus diisi'
				]	
			],

			'pilihjurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jurusan mahasiswa harus diisi'
				]	
			],

			'pilihsemester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'semester mahasiswa harus diisi'
				]	
			],

			'password_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'password mahasiswa harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$passwordHas = $this->request->getVar('password_mhs');
		$resultHasPassword = password_hash($passwordHas, PASSWORD_BCRYPT);

		$data = [
			'npm_mhs' => $this->request->getVar('npm_mhs'),
			'nama_mhs' => $this->request->getVar('nama_mhs'),
			'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
			'semester_mhs' => $this->request->getVar('pilihsemester'),
			'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
			'password_mhs' => $resultHasPassword,
			'foto_mhs' => 'default.jpg',
		];


		$this->m_Mahasiswa->insert($data);
		return redirect()->to('admin/mahasiswa');
	}

	public function prosesEditMahasiswa()
	{
		$rules = $this->validate([
			'npm_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'npm mahasiswa harus diisi'
				]	
			],

			'nama_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama mahasiswa harus diisi'
				]	
			],

			'tgl_lahir_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tanggal lahir mahasiswa harus diisi'
				]	
			],

			'pilihjurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jurusan mahasiswa harus diisi'
				]	
			],

			'pilihsemester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'semester mahasiswa harus diisi'
				]	
			],

		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$id = $this->request->getVar('old_npm_mhs');

		$passwordHas = $this->request->getVar('password_mhs');
		$resultHasPassword = password_hash($passwordHas, PASSWORD_BCRYPT);

		$data = [
			'npm_mhs' => $this->request->getVar('npm_mhs'),
			'nama_mhs' => $this->request->getVar('nama_mhs'),
			'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
			'semester_mhs' => $this->request->getVar('pilihsemester'),
			'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
			'password_mhs' => $resultHasPassword,
		];


		$this->m_Mahasiswa->update($id, $data);
		return redirect()->to('admin/mahasiswa');
	}

	public function prosesEditMahasiswaByMahasiswa()
	{
		$rules = $this->validate([
			'npm_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'npm mahasiswa harus diisi'
				]	
			],

			'nama_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama mahasiswa harus diisi'
				]	
			],

			'tgl_lahir_mhs' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'tanggal lahir mahasiswa harus diisi'
				]	
			],

			'pilihjurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jurusan mahasiswa harus diisi'
				]	
			],

			'pilihsemester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'semester mahasiswa harus diisi'
				]	
			],

		]);

			$rulesImage = $this->validate([
	      'foto_mhs' => [
	        'rules' => 'is_image[foto_mhs]',
	        'errors' => [
	          'is_image' => 'File yang di upload bukan gambar'
	        ]
	      ],
	    ]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$image = $_FILES['foto_mhs']['name'];

		if (!$image) {
	      $passwordHas = $this->request->getVar('password_mhs');
		  $resultHasPassword = password_hash($passwordHas, PASSWORD_BCRYPT);

	      if (!$passwordHas) {
	        $id = $this->request->getVar('old_npm_mhs');
	        $data = [
	        	'npm_mhs' => $this->request->getVar('npm_mhs'),
				'nama_mhs' => $this->request->getVar('nama_mhs'),
				'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
				'semester_mhs' => $this->request->getVar('pilihsemester'),
				'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
	        ];

	        $this->m_Mahasiswa->update($id, $data);
	        return redirect()->to('/dashboard');
	    }

		$id = $this->request->getVar('old_npm_mhs');

		$data = [
			'npm_mhs' => $this->request->getVar('npm_mhs'),
			'nama_mhs' => $this->request->getVar('nama_mhs'),
			'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
			'semester_mhs' => $this->request->getVar('pilihsemester'),
			'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
			'password_mhs' => $resultHasPassword,
		];

		$this->m_Mahasiswa->update($id, $data);
		return redirect()->to('/dashboard');
		}
	

		if (!$rulesImage) {
	      session()->setFlashdata('error', $this->validator->listErrors());
	      return redirect()->back();
	    }

	    $oldImage = $this->request->getvar('old_foto_mhs');

	    if ($oldImage != 'default.png') {
	      unlink(FCPATH . 'assets/img/uploads/' . $oldImage);
	    }

	    $newNameImage = $this->request->getVar('npm_mhs');
	    $newImage = $this->request->getFile('foto_mhs');
	    $newImage->move('assets/img/uploads/', $newNameImage . '.jpg');

		$id = $this->request->getVar('old_npm_mhs');
	    $passwordHas = $this->request->getVar('password_mhs');
	    $resultHasPassword = password_hash($passwordHas, PASSWORD_BCRYPT);

	    if (!$passwordHas) {
	    $id = $this->request->getVar('old_npm_mhs');
	      $data = [
	        'npm_mhs' => $this->request->getVar('npm_mhs'),
			'nama_mhs' => $this->request->getVar('nama_mhs'),
			'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
			'semester_mhs' => $this->request->getVar('pilihsemester'),
			'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
	        'foto_mhs' => $newNameImage . '.jpg',
	      ];

		$this->m_Mahasiswa->update($id, $data);
	    return redirect()->to('/dashboard');
		}

		$id = $this->request->getVar('old_npm_mhs');
		$data = [
	        'npm_mhs' => $this->request->getVar('npm_mhs'),
			'nama_mhs' => $this->request->getVar('nama_mhs'),
			'tgl_lahir_mhs' => $this->request->getVar('tgl_lahir_mhs'),
			'semester_mhs' => $this->request->getVar('pilihsemester'),
			'jurusan_mhs' => $this->request->getVar('pilihjurusan'),
	        'foto_mhs' => $newNameImage . '.jpg',
	      ];

	    $this->m_Mahasiswa->update($id, $data);
	    return redirect()->to('/dashboard');
		}

	public function krs()
	{
		$dataUser = $this->m_Mahasiswa->where('npm_mhs', session()->get('npm'))->first();
		$jurusanUser = $dataUser['jurusan_mhs'];
		$data = [
			'title' => 'KRS',
			'user' => $this->m_Mahasiswa->where('npm_mhs', session()->get('npm'))->first(),
			'dataMatkulS1' => $this->m_Custom->getMKSemester1('SMTR1', $jurusanUser),
			'dataMatkulS2' => $this->m_Custom->getMKSemester2('SMTR2', $jurusanUser),
			'dataMatkulS3' => $this->m_Custom->getMKSemester3('SMTR3', $jurusanUser),
			'dataMatkulS4' => $this->m_Custom->getMKSemester4('SMTR4', $jurusanUser),
			'dataMatkulS5' => $this->m_Custom->getMKSemester5('SMTR5', $jurusanUser),
			'dataMatkulS6' => $this->m_Custom->getMKSemester6('SMTR6', $jurusanUser),
			'dataMatkulS7' => $this->m_Custom->getMKSemester7('SMTR7', $jurusanUser),
			'dataMatkulS8' => $this->m_Custom->getMKSemester8('SMTR8', $jurusanUser),
		];
		return view('krs/index', $data);

	}	

	public function prosesKrs()
	{
		$rules = $this->validate([
	      'npm_mhs' => [
	        'rules' => 'required',
	        'errors' => [
	          'required'  => 'NPM harus di isi'
	        ]
	      ],
	      'pilihTahunAkademik' => [
	        'rules' => 'required',
	        'errors' => [
	          'required'  => 'Tahun harus di isi'
	        ]
	      ],
	    ]);

	    if (!$rules) {
	      session()->setFlashdata('error', $this->validator->listErrors());
	      return redirect()->back();
	    }

	    $dataMK = $this->request->getVar('mk');

	    for ($i = 0; $i < count($dataMK); $i++) {

	      $npm = $this->request->getVar('npm_mhs');
	      $tahun = $this->request->getVar('pilihTahunAkademik');
	      $mk = $dataMK[$i];
	      $smstr = $this->request->getvar('semester_krs');
	      $this->m_KRS->insert([
	        'npm_mhs' 		=> $npm,
	        'akademik_krs'  => $tahun,
	        'kode_matkul'   => $mk,
	        'semester_krs'	=> $smstr
      ]);
	    }
	    return redirect()->to('/dashboard');
	}

	public function listKrs()
	{
		$data = [
			'title' => 'Data KRS',
			'dataKRS' => $this->m_KRS->findAll(),
			'user' => $this->m_Mahasiswa->where('npm_mhs', session()->get('npm'))->first(),
		];

		return view('krs/list', $data);
	}

	public function deleteKrs($id_krs)
	{
		$this->m_KRS->delete($id_krs);
		return redirect()->to('mahasiswa/krs/list');
	}
	
}