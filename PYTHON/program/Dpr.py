class Dpr:
    
    __nama = ""
    __id = ""
    __nama_bidang = ""
    __nama_partai = ""
    
    # construct 
    def __init__ (self, name = "", id = "", nama_bidang = "", nama_partai = ""):
        self.__nama = name
        self.__id = id
        self.__nama_bidang = nama_bidang
        self.__nama_partai = nama_partai
    
    # getter #
    def getName(self):
        return self.__nama
        
    def getBidang(self):
        return self.__nama_bidang
    
    def getPartai(self):
        return self.__nama_partai
    
    def getId(self):
        return self.__id
        
    # setter #
    def setName(self, name):
        self.__nama = name
        
    def setBidang(self, bidang):
        self.__nama_bidang = bidang
    
    def setPartai(self, partai):
        self.__nama_partai = partai
    
    def setId(self, id):
        self.__id = id

    def tambah(self, list):
        n = 0
        try:
            n = int(input("Masukkan Berapa anggota: "))
        except ValueError:
            print("[INPUTAN HARUS BERSIFAT INTEGER!]")
            print()
        for i in range(n):
            print("No: " + str(i + 1))
            name = input("Masukkan Nama: ")
            id = input("Masukkan ID: ")
            nama_bidang = input("Masukkan Bidang: ")
            nama_partai = input("Masukkan Partai: ")
            
            temp = Dpr(name, id, nama_bidang, nama_partai)
            list.append(temp)
            print()


    def renameName(self,list, id, name): # mengubah nama
         for human in list:
             if human.getId() == id:
                 print("Nama " + human.getName() + " telah diubah menjadi " + name)
                 human.setName(name)

    def renameBidang(self,list, id, bidang): # mengubah bidang
         for human in list:
             if human.getId() == id:
                 print("Bidang " + human.getBidang() + " telah diubah menjadi " + bidang)
                 human.setBidang(bidang)
     
    def renamePartai(self,list, id, partai): # mengubah partai
         for human in list:
             if human.getId() == id:
                 print("Partai " + human.getPartai() + " telah diubah menjadi " + partai)
                 human.setPartai(partai)

    def hapus(self,list, id): # menghapus data
        for human in list[:]:
            if human.getId() == id:
                print(human.getName() +" telah dihapus!")
                list.remove(human)

    def ketemu(self,list, id): # mencari id anggota
        for human in list:
            if human.getId() == id:
                return 1
        return 0

    def tampil(self, list): # menampilkan anggota
        print("Anggota: ")
        if list and len(list) > 0:  # jika list tidak kosong
            
			# Menghitung panjang maks dari atribut name di semua objek Human.Jika panjang 'Nama' lebih besar, maka itu panjang lebar table bagian Nama.
            max_name_length = max(max(len(human.getName()) for human in list), len("Nama"))
            
            # Menghitung panjang maks dari atribut name di semua objek Human.Jika panjang 'Id' lebih besar, maka itu panjang lebar table bagian Id.
            max_id_length = max(max(len(str(human.getId())) for human in list), len("Id"))
            
            # Menghitung panjang maks dari atribut name di semua objek Human.Jika panjang 'Bidang' lebih besar, maka itu panjang lebar table bagian Bidang.
            max_bidang_length = max(max(len(human.getBidang()) for human in list), len("Bidang"))
            
            # Menghitung panjang maks dari atribut name di semua objek Human.Jika panjang 'Partai' lebih besar, maka itu panjang lebar table bagian partai.
            max_partai_length = max(max(len(human.getPartai()) for human in list), len("Partai"))
            format_string = "| {0:<" + str(max_name_length) + "} | {1:<" + str(max_id_length) + "} | {2:<" + str(max_bidang_length) + "} | {3:<" + str(max_partai_length) + "} |"

            print(format_string.format("Nama", "Id", "Bidang", "Partai")) # membuat format tabel
            for human in list:
                print(format_string.format(human.getName(), human.getId(), human.getBidang(), human.getPartai())) # print setiap nama,id,bidang,partai
            print()
        else:  # jika list kosong
            print("Kosong!")
