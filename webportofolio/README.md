# README.md Portfolio Website – Nadila Putri
### Deskripsi Project
Website ini merupakan portfolio statis yang dibuat menggunakan HTML, CSS, Bootstrap 5, dan Vue JS. Website terdiri dari tiga section utama: Home, About Me, dan Certificates.

Website dirancang responsif dan memiliki navigasi scroll antar section.

# 1. Section Home (Hero Section)
<img width="2879" height="1702" alt="image" src="https://github.com/user-attachments/assets/02de84b3-2fac-4f2f-8676-2ac38ce9d577" />

### Tampilan:
* Background image dengan overlay gelap
* Greeting: “Hello, Welcome 👋”
* Deskripsi singkat
* Tombol “Get Started”

### Penjelasan Code:
* Menggunakan Bootstrap utility (`d-flex`, `align-items-center`, `text-center`)
* Background image diatur melalui CSS:

```css
.hero {
    background: url("assets/background.png") no-repeat center center/cover;
}
```

* Overlay dibuat menggunakan pseudo-element `::before`
* Tombol menggunakan Bootstrap button class

---

# 2. Navbar
<img width="2879" height="1704" alt="image" src="https://github.com/user-attachments/assets/6640d284-3a2b-4e71-b78f-480cf2029878" />

### Tampilan:
* Foto profil berbentuk lingkaran
* Hover menampilkan jurusan dan universitas
* Navigasi ke Home, About Me, Certificates
* Responsif (collapse saat layar kecil)
### Penjelasan Code:
* Menggunakan Bootstrap Navbar
* Hover effect dibuat dengan CSS `position: absolute`
* Data ditampilkan menggunakan Vue interpolation:

```html
{{ name }}
{{ major }}
{{ university }}
```

# 3. Section About Me
<img width="2879" height="1704" alt="image" src="https://github.com/user-attachments/assets/6872ff37-749b-4713-b321-50e69b0d4e68" />

### Tampilan:
* Deskripsi diri
* Experience dalam bentuk list
* Skills dengan progress bar
* Layout dua kolom menggunakan Grid System
### Penjelasan Code:
* Grid menggunakan:

```html
row g-5
col-lg-6
```

* Experience ditampilkan menggunakan Vue `v-for`:

```html
<li v-for="exp in experiences">
```

* Progress bar menggunakan Bootstrap:

```html
<div class="progress-bar" :style="{ width: skill.level + '%' }">
```


# 4. Section Certificates
<img width="2879" height="1703" alt="image" src="https://github.com/user-attachments/assets/95fa3171-6a09-4129-93b5-7cfe012431f1" />

### Tampilan:
* Layout grid 3 kolom
* Card component
* Gambar sertifikat
### Penjelasan Code:
* Menggunakan Bootstrap Grid (`col-md-4`)
* Menggunakan Bootstrap Card
* Data sertifikat ditampilkan menggunakan Vue `v-for`

# 5. Footer
<img width="2879" height="1707" alt="image" src="https://github.com/user-attachments/assets/6f3f1245-a118-4cf4-a9a2-7fc6481cdaf6" />

### Tampilan:
* Email dengan mailto
* Icon social media
* Hover animation
### Penjelasan Code:
* Menggunakan Bootstrap Icons
* Hover effect menggunakan CSS `transition`
* Link menggunakan `target="_blank"`

# 6. Teknologi yang Digunakan
* HTML5
* CSS3
* Bootstrap 5
* Vue JS 3
* Bootstrap Icons

# Nilai Tambah
- Menggunakan Bootstrap 5 (navbar, grid, card, progress bar, responsive design)
- Menggunakan Vue JS untuk interpolation dan rendering data statis
