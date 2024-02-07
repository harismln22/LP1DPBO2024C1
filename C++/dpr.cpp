#include <iostream>
#include <string>

using namespace std;

class Human
{
	private: // atribut untuk class human
		string name;
		string id;
		string nama_bidang;
		string nama_partai;
	
	public: 
	
		Human()
		{
			this->name = "";
		}
		
		list<Human> llist;
		
		Human(string name, string id, string nama_bidang, string nama_partai)
		{
			this->name = name;
			this->id = id;
			this->nama_bidang = nama_bidang;
			this->nama_partai = nama_partai;
		}
		
		string get_name() // mengambil nama
		{
			return this->name;
		}
		
		
		void set_name(string name) // membuat/set nama
		{
			this->name = name;
		}
		
		void set_id(string id) // membuat/set id
		{
			this->id= id;
		}
		
		string get_id() // mengambil id
		{
			return this->id;
		}
		
		string get_namaBidang() // mengambil nama bidang
		{
			return this->nama_bidang;
		}
		
		void set_namaBidang(string nama_bidang) // membuat/set nama bidang
		{
			this->nama_bidang = nama_bidang;
		}
		
		string get_namaPartai() // mengambil nama partai
		{
			return this->nama_partai;
		}
		
		void set_namaPartai(string nama_partai) // membuat/set nama partai
		{
			this->nama_partai = nama_partai;
		}
		
		void renameHuman(string id,string namaBaru) // edit nama anggota
		{
			for(list<Human>:: iterator it = llist.begin(); it != llist.end(); ++it )
			{
				if(it->get_id() == id) // jika ditemukan sesuai dengan id
				{
					cout << "Nama " << it->get_name() << " Telah diubah menjadi " << namaBaru << endl;
					it->set_name(namaBaru);
				}
			}
		}
		
		void renameBidang(string id,string bidangBaru) // edit nama bidang
		{
			for(list<Human>:: iterator it = llist.begin(); it != llist.end(); ++it )
			{
				if(it->get_id() == id) // jika ditemukan sesuai dengan id
				{
					cout << "Nama " << it->get_namaBidang() << " Telah diubah menjadi " << bidangBaru << endl;
					it->set_namaBidang(bidangBaru);
				}
			}
		}
		
		void renamePartai(string id,string partaiBaru) // edit nama partai
		{
			for(list<Human>:: iterator it = llist.begin(); it != llist.end(); ++it )
			{
				if(it->get_id() == id) // jika ditemukan sesuai dengan id
				{
					cout << "Nama " << it->get_namaPartai() << " Telah diubah menjadi " << partaiBaru << endl;
					it->set_namaPartai(partaiBaru);
				}
			}
		}
		
		void tambah() // input anggota
		{
			int n; // deklarasi
			cout << "Masukkan berapa orang?: ";
			cin >> n; // input
			for(int i = 0; i < n; i++)
			{
				Human temp;
				cout << "No " << (i + 1) << endl; 
				cout << "Masukkan nama: "; // membuat nama
				cin >> name;
				temp.set_name(name);
				
				cout << "Masukkan ID: "; // membuat id
				cin >> id;
				temp.set_id(id);
				
				cout << "Masukkan nama Bidang: "; // membuat nama bidang
				cin >> nama_bidang;
				temp.set_namaBidang(nama_bidang);
				
				cout << "Masukkan nama Partai: "; // membuat nama partai
				cin >> nama_partai;
				temp.set_namaPartai(nama_partai);
				
				llist.push_back(temp);
			}
		}
		
		
		int ketemu(string id) // untuk menemukan id anggota
		{
			for(list<Human>:: iterator it = llist.begin(); it != llist.end(); ++it)
			{
				if(it->get_id() == id)
				{
					return 1; // jika ada
				}
			}
			return 0; // jika tidak ada
		}
		
		void hapus(string id) // menghapus anggota
		{
			for(list<Human>:: iterator it = llist.begin(); it != llist.end(); )
			{
				if(it->get_id() == id) // jika ditemukan
				{
					cout << it->get_name() << " Telah dihapus!" << endl;
					it = llist.erase(it); // hapus dengan function 'erase'
				}
				else
				{
					++it; // iterasi jika tidak ditemukan
				}
			}
		}
		
		void tampil() // menampilkan anggota
		{
			// print all element
			cout << "Anggota: " << '\n';
			int i = 0;
			for(list<Human>::iterator it = llist.begin();it != llist.end() ;it++)
			{
				cout << (i + 1) << ". " << it->get_name() << " || " << it->get_id() << " || " << it->get_namaBidang() << " || " << it->get_namaPartai() << '\n';
				i++;
			}
			cout << endl;
		}
		
		~Human() // destruct
		{
			
		}
};

