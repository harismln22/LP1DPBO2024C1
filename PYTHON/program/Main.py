from Dpr import Dpr

dpr = [] # list
temp = Dpr()

milih = 0 # inisialisasi
stop = 0 # inisialisasi
while stop == 0:
    print("==================================")
    print("Silahkan pilih fitur dibawah ini!")
    print("1. Menambah")
    print("2. Hapus")
    print("3. Mengubah")
    print("4. Tampil")
    print("5. Keluar")
    print("==================================")
    milih = 0
    try:
        milih = int(input("Pilih (1/2/3/4): ")) # input scan
    except ValueError:
        print("[INPUTAN HARUS BERSIFAT INTEGER!]")
        print()
            
    if milih == 1: # jika milih nambah anggota
        temp.tambah(dpr)
        temp.tampil(dpr)
        
    elif milih == 2: # fitur menghapus data
        print("Masukkan ID yang mau dihapus")
        ambil = input()
        if temp.ketemu(dpr, ambil) == 1:
            temp.hapus(dpr, ambil)
        else:
            print("ID tersebut tidak ditemukan!")
    
    elif milih == 3: # fitur mengubah data
        print("++++++++++++++++++++++++++++++++++++++++")
        print("Pilih fitur yang mau diubah dibawah ini")
        print("1. Nama")
        print("2. Bidang")
        print("3. Partai")
        print("4. Keluar")
        print("++++++++++++++++++++++++++++++++++++++++")
        fitur_ubah = int(input("Pilih (1/2/3/4): "))
        print("Masukkan ID yang akan diubah")
        ambil = input()
        if fitur_ubah == 1: # fitur mengubah nama
            if temp.ketemu(dpr, ambil) == 1:
                change_name = input("Masukkan Nama baru: ")
                temp.renameName(dpr, ambil, change_name)
            else:
                print("*Id tersebut tidak ditemukan!*")
        elif fitur_ubah == 2: # fitur mengubah Bidang
            if temp.ketemu(dpr, ambil) == 1:
                change_bidang = input("Masukkan Nama Bidang baru:")
                temp.renameBidang(dpr, ambil, change_bidang)
            else:
                print("*ID tersebut tidak ditemukan!*")
        elif fitur_ubah == 3: # fitur mengubah Partai
            if temp.ketemu(dpr, ambil) == 1:
                change_partai = input("Masukkan Nama Partai baru: ")
                temp.renamePartai(dpr, ambil, change_partai)
            else:
                print("*ID tersebut tidak ditemukan!*")
    elif milih == 4: # menampilkan anggota
        temp.tampil(dpr)
    else: # jika tidak memilih dari fitur diatas
        stop = 1; # stop loop