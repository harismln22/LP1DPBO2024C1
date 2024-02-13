import java.util.Scanner;
import java.util.ArrayList;
import java.util.Iterator;

public class Main
{
	public static void main(String[] args)
	{
		int i = 0, n = 0; // inisialisasi
		String name, id, namaBidang, namaPartai; // deklar variable
		ArrayList<Dpr> dpr = new ArrayList<>(); // list
		Dpr temp = new Dpr(); 
		
		Scanner scan = new Scanner(System.in); // secara singkat, scanf
		
		int stop = 0; // inisialisasi
		int milih = 0; // input milih fitur awal
		
		while(stop == 0) // selama stop masih 0
		{
			
			System.out.println("++++++++++++++++++++++++++++++++++");
			System.out.println("Silahkan pilih fitur dibawah ini!");
			System.out.println("1. Menambah");
			System.out.println("2. Hapus");
			System.out.println("3. Mengubah");
			System.out.println("4. Tampil");
			System.out.println("5. Keluar");
			System.out.println("++++++++++++++++++++++++++++++++++");
			System.out.print("pilih (1/2/3/4): ");
			milih = scan.nextInt();
			switch(milih)
			{
				case 1: // fitur menambah anggota
				temp.tambah(dpr);
				break;
				
				case 2: // fitur menghapus data
				System.out.println("Masukkan ID yang mau dihapus");
				String ambil = ""; 
				
				ambil = scan.next();
				if(temp.ketemu(dpr, ambil) == 1) // jika id yang dicari ketemu
				{
					temp.hapus(dpr, ambil); // akan dihapus
				}
				else // jika tidak ketemu
				{
					System.out.println("Id tersebut tidak ditemukan!");
				}
				break;
				
				case 3: // fitur mengubah data
				System.out.println("Pilih apa yang mau diubah");
				System.out.println("---------------------------");
				System.out.println("1. Nama");
				System.out.println("2. Bidang");
				System.out.println("3. Partai");
				System.out.println("4. Keluar");
				System.out.println("---------------------------");
				System.out.println("Pilih (1/2/3/4): ");
				
				int ubah_apa = 0; // input untuk fitur mengubah
				ubah_apa = scan.nextInt(); // input
				
				System.out.println("Masukkan ID yang mau diubah");
				ambil = "";
				switch(ubah_apa)
				{
					case 1: // pilihan mengubah nama
					String ubah_name;
					
					ambil = scan.next(); 
					if(temp.ketemu(dpr, ambil) == 1)
					{
						System.out.println("Masukkan nama baru");
						ubah_name = scan.next();
						temp.renameHuman(dpr, ambil, ubah_name);                 
					}
					else
					{
						System.out.println("Id tersebut tidak ditemukan!");
					}
					break;
					
					case 2: // pilihan mengubah nama bidang
					String ubah_bidang;
					
					ambil = scan.next(); 
					if(temp.ketemu(dpr, ambil) == 1)
					{
						System.out.println("Masukkan nama Bidang baru:");
						ubah_bidang = scan.next();
						temp.renameBidang(dpr, ambil, ubah_bidang);                 
					}
					else
					{
						System.out.println("Id tersebut tidak ditemukan!");
					}
					break;
					
					case 3: // pilihan mengubah partai
					String ubah_partai;
					
					ambil = scan.next(); 
					if(temp.ketemu(dpr, ambil) == 1)
					{
						System.out.println("Masukkan nama Partai baru:");
						ubah_partai = scan.next();
						temp.renamePartai(dpr, ambil, ubah_partai);                 
					}
					else
					{
						System.out.println("Id tersebut tidak ditemukan!");
					}
					break;
					
					default:
					
				}
				case 4: // pilihan menampilkan anggota
				temp.tampil(dpr);
				break;
				
				default: // jika tidak milih dari atas
				stop = 1; // loop berhenti
			}
			
		}
		scan.close();
	}
}
