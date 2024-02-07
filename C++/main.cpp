// Saya Haris Maulana[2209058] berjanji tidak akan curang dalam latihan soal 1 DPBO demi keberkahannya..
#include <bits/stdc++.h>
#include "dpr.cpp"

using namespace std;

int main()
{
	int n, i; // deklarasi
	string name, id, nama_bidang, nama_partai; // deklarasi
	Human dpr; // deklarasi
	// premade linked list library
	list<Human> llist;
	dpr.tambah(); // input awal
	
	cout << endl;
	
	int stop = 1;
	while(stop == 1) // selama tidak berhenti
	{
		cout << "1. Mengubah "<< endl << "2. Hapus "<< endl << "3. tampil" << endl << "4. Menambah" << endl << "5. keluar" << endl << "pilih (1/2/3/4): ";
		int memilih; // milih
		string ambil; // deklarasi untuk ambil id
		cin >> memilih;
		switch(memilih)
		{
			case 1: // pilihan mengubah
			cout << "Pilih Data yang akan diubah" << endl;
			cout << "[1. ubah Nama]" << endl << "[2. ubah nama Partai]" << endl << "[3. ubah nama Bidang]" << endl << "[4. keluar]" << endl;
			int pilih_ubah;
			cout << "Pilih(1/2/3/4): ";
			cin >> pilih_ubah;
			switch(pilih_ubah)
			{
				case 1: // mengubah nama
				cout << "Masukkan ID yang mau ubah Nama: ";
				cin >> ambil;
				if(dpr.ketemu(ambil)) // jika ketemu
				{
					string nameBaru;
					cout << "Masukkan nama baru: ";
					cin >> nameBaru;
					dpr.renameHuman(ambil, nameBaru);
				}
				else // jika tidak
				{
					cout << "ID tersebut tidak ditemukan" << endl;
				}
				break;
				
				case 2: // mengubah nama partai
				cout << "Masukkan ID yang mau ubah nama Partai: ";
				cin >> ambil;
				if(dpr.ketemu(ambil)) // jika ketemu
				{
					string nameBaru;
					cout << "Masukkan nama Partai baru: ";
					cin >> nameBaru;
					dpr.renamePartai(ambil, nameBaru);
				}
				else // jika tidak
				{
					cout << "ID tersebut tidak ditemukan" << endl;
				}
				break;
				
				case 3: // mengubah nama bidang
				cout << "Masukkan ID yang mau ubah nama Bidang: ";
				cin >> ambil;
				if(dpr.ketemu(ambil)) // jika ketemu
				{
					string nameBaru;
					cout << "Masukkan nama Bidang baru: ";
					cin >> nameBaru;
					dpr.renameBidang(ambil, nameBaru);
				}
				else // jika tidak
				{
					cout << "ID tersebut tidak ditemukan" << endl;
				}
				break;
			}
			break;
			
			case 2: // pilihan menghapus anggota
			cout << "Masukkan ID yang mau dihapus: ";
			cin >> ambil;
			if(dpr.ketemu(ambil)) // jika ketemu
			{
				dpr.hapus(ambil);
			}
			else // jika tidak
			{
				cout << "ID tersebut tidak ditemukan" << endl;
			}
			break;
			
			case 3:
			dpr.tampil(); // menampilkan anggota
			break;
			
			case 4:
			dpr.tambah(); // menambahkan anggota
			break;
			
			default: // jika selain dari pilihan diatas
			stop = 0; // loop akan berhenti
		}
	}
	
	return 0;
}