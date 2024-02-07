#include <iostream>
#include <string>

using namespace std;

class Human
{
	private:
		string name;
		string id;
		string nama_bidang;
		string nama_partai;
	
	public:
	
		Human()
		{
			this->name = "";
		}
		
		Human(string name, string id, string nama_bidang, string nama_partai)
		{
			this->name = name;
			this->id = id;
			this->nama_bidang = nama_bidang;
			this->nama_partai = nama_partai;
		}
		
		string get_name()
		{
			return this->name;
		}
		
		void rename(string name)
		{
			this->name = name;
		}
		
		void set_name(string name)
		{
			this->name = name;
		}
		
		void set_id(string id)
		{
			this->id= id;
		}
		
		string get_id()
		{
			return this->id;
		}
		
		string get_namaBidang()
		{
			return this->nama_bidang;
		}
		
		void set_namaBidang(string nama_bidang)
		{
			this->nama_bidang = nama_bidang;
		}
		
		string get_namaPartai()
		{
			return this->nama_partai;
		}
		
		void set_namaPartai(string nama_partai)
		{
			this->nama_partai = nama_partai;
		}
		
		~Human()
		{
			
		}
};

