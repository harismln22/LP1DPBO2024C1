import java.util.Scanner;
import java.util.ArrayList;
import java.util.Iterator;

public class Dpr
{
	private String name; 
	private String id;
	private String nama_bidang;
	private String nama_partai;
	
	public Dpr() // construct
	{
		this.name = "";
		this.id = "";
		this.nama_bidang = "";
		this.nama_partai = "";
	}
	
	public Dpr(String name, String id, String nama_bidang, String nama_partai)
	{
		this.name = name;
		this.id = id;
		this.nama_bidang = nama_bidang;
		this.nama_partai = nama_partai;
	}
	
	public void tambah(ArrayList<Dpr> list) 
	{
		Scanner scan = new Scanner(System.in); // membuat scanner
		System.out.print("Masukkan berapa anggota: ");
		int n = 0; // inisialisasi
		try {
			n = scan.nextInt(); // scanf
		} catch (Exception e) {
			System.out.println("[inputan harus bersifat integer!]");
			System.out.println();
		}
		for (int i = 0; i < n; i++) { // input masukan penambahan anggota
			System.out.println("No: " + (i + 1));
			System.out.print("Masukkan nama: ");
			String name = scan.next();
			System.out.print("Masukkan id: ");
			String id = scan.next();
			System.out.print("Masukkan nama Bidang: ");
			String nama_bidang = scan.next();
			System.out.print("Masukkan nama Partai: ");
			String nama_partai = scan.next();

			Dpr temp = new Dpr(name, id, nama_bidang, nama_partai);
			list.add(temp);
			System.out.println();
		}
	}
	
	/* getter*/
	public String getName()
	{
		return this.name;
	}
	
	public String getId()
	{
		return this.id;
	}
	
	public String getBidang()
	{
		return this.nama_bidang;
	}
	
	public String getPartai()
	{
		return this.nama_partai;
	}
	
	/* setter */
	public void setName(String name)
	{
		this.name = name;
	}
	
	public void setId(String id)
	{
		this.id= id;
	}
	
	public void setBidang(String nama_bidang)
	{
		this.nama_bidang = nama_bidang;
	}
	
	public void setPartai(String nama_partai)
	{
		this.nama_partai= nama_partai;
	}
	

	public void renameHuman(ArrayList<Dpr> list, String id, String name) // mengubah nama
	{
		for (Dpr human : list) 
		{
			if (human.getId().equals(id)) // jika id yang dicari ketemu/sama
			{
				System.out.println("Nama " + human.getName() + " telah diubah menjadi " + name);
				human.setName(name);
			}
		}
	}
	
	public void renameBidang(ArrayList<Dpr> list, String id, String bidang) // mengubah nama bidang
	{
		for (Dpr human : list) 
		{
			if (human.getId().equals(id)) // jika id yang dicari ketemu/sama
			{
				System.out.println("Nama bidang " + human.getBidang() + " telah diubah menjadi " + bidang);
				human.setBidang(bidang);
			}
		}
	}
	
	public void renamePartai(ArrayList<Dpr> list, String id, String partai) // mengubah nama partai
	{
		for (Dpr human : list) 
		{
			if (human.getId().equals(id)) // jika id yang dicari ketemu/sama
			{
				System.out.println("Nama partai: " + human.getPartai() + " telah diubah menjadi " + partai);
				human.setPartai(partai);
			}
		}
	}
	
	public void hapus(ArrayList<Dpr> list,String id) // prosedur menghpus data
	{
		Iterator<Dpr> it = list.iterator();
		while(it.hasNext())
		{
			Dpr human = it.next();
			if(human.getId().equals(id)) // jika id yang dicari ketemu /sama
			{
				System.out.println(human.getName() + " telah dihapus!");
                it.remove();
			}
		}
	}
	
	public int ketemu(ArrayList<Dpr> list,String id) // fungsi untuk menemukan id yang dicari
	{
		for(Dpr human : list)
		{
			if(human.getId().equals(id)) 
			{
				return 1; // jika ada
			}
		}
		return 0; // jika tidak ada
	}
	
	public void tampil(ArrayList<Dpr> list)  // menampilkan anggota
	{
		System.out.println("Anggota: ");
		int i = 0;
		if(list != null && !list.isEmpty()) // jika list tidak kosong
		{
			// Menghitung panjang maks dari atribut name di semua objek Human.Jika panjang 'Nama' lebih besar, maka itu panjang lebar table bagian nama.
			int maxNameLength = Math.max(list.stream().mapToInt(human -> human.getName().length()).max().getAsInt(), "Name".length());
			
			// Menghitung panjang maksimum dari atribut id di semua objek Human. id diubah menjadi string agar bisa menghitung panjangnya. Jika panjang 'Id' lebih besar, maka itu panjang lebar table bagian Id.
			int maxIdLength = Math.max(list.stream().mapToInt(human -> String.valueOf(human.getId()).length()).max().getAsInt(), "id".length());
			
			// Menghitung panjang maksimum dari atribut bidang di semua objek Human.Jika panjang 'Bidang' lebih besar, maka itu panjang lebar table bagian Bidang.
			int maxBidangLength = Math.max(list.stream().mapToInt(human -> human.getBidang().length()).max().getAsInt(), "Bidang".length());
			
			// Menghitung panjang maksimum dari atribut partai di semua objek Human. Jika panjang 'Partai' lebih besar, maka itu panjang lebar table bagian partai.
			int maxPartaiLength = Math.max(list.stream().mapToInt(human -> human.getPartai().length()).max().getAsInt(), "Partai".length());
			
			// Membuat format string untuk mencetak setiap objek Human dalam daftar. Format ini digunakan untuk mencetak tabel dengan lebar kolom yang sesuai dengan panjang maksimum dari setiap atribut.
			String format = "|| %-" + maxNameLength + "s || %-" + maxIdLength + "s || %-" + maxBidangLength + "s || %-" + maxPartaiLength + "s ||\n";

			System.out.printf(format, "Nama", "Id", "Bidang", "Partai"); // membuat tabelnya
			for (Dpr human : list)
			{
				// print setiap nama,id,bidang,partai
				System.out.printf(format, human.getName(), human.getId(), human.getBidang(), human.getPartai());
			}
			System.out.println();
		}
		else // jika list kosong
		{
			System.out.println("Kosong!");
		}
		
	}
	/* aku dapat cara function list.stream() dari gpt awkoawkoawk (emot batu) */
}

