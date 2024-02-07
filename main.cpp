#include <bits/stdc++.h>
#include "dpr.cpp"

using namespace std;

int main()
{
	int i, n = 0;
	string name;
	char gender;
	string id;
	string nama_bidang;
	string nama_partai;
	
	// premade linked list library
	list<Human> llist;
	cout << "Masukkan berapa orang?: ";
	cin >> n;
	
	for(int i = 0; i < n; i++)
	{
		Human temp;
		cout << "Masukkan nama, id, nama bidang, nama partai" << endl;
		cin >> name >> id >> nama_bidang >> nama_partai;
		
		temp.set_name(name);
		temp.set_id(id);
		temp.set_namaBidang(nama_bidang);
		temp.set_namaPartai(nama_partai);
		
		llist.push_back(temp);
	}
	
	
	// output
	// print all element
	cout << "output: " << '\n';
	i = 0;
	for(list<Human>::iterator it = llist.begin();it != llist.end() ;it++)
	{
		cout << (i + 1) << ", " << it->get_name() << " || " << it->get_id() << " || " << it->get_namaBidang() << " || " << it->get_namaPartai() << '\n';
		i++;
	}
	
	int stop = 1, nahan = 0;
	while(stop == 1)
	{
		cout << "1. mengubah || 2. hapus || 3. keluar" << endl << "pilih (1/2/3): ";
		int memilih;
		cin >> memilih;
		switch(memilih)
		{
			case 1:
			
			break;
			
			case 2:
			cout << "hapus data? (y/n): ";
			char hapus;
			cin >> hapus;
			string ambil;
			if(hapus == 'y')
			{
				cout << "Masukkan id: ";
				cin >> ambil;
			}
			else
			{
				nahan = 1;
			}
			break;
			
			default:
			stop = 0;
		}
		
		if(nahan == 1)
		{
			cout << "keluar? (1/0): ";
			cin >> memilih;
			
			if(memilih == 0)
			{
				break;
			}
		}
	}
	
	return 0;
}


