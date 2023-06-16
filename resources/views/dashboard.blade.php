@extends('layouts.main')
@section('content')
<h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Role</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Category</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Product</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white text-decoration-none" href="#"></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="BarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Request</th>
                                            <th>Ready</th>
                                            <th>Tanggal</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Request</th>
                                            <th>Ready</th>
                                            <th>Tanggal</th>
                                            <th>Harga</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Cupcake Redvelvet</td>
                                            <td>Cupcake</td>
                                            <td>Bebas</td>
                                            <td>4-5 Hari</td>
                                            <td>2023/04/25</td>
                                            <td>Rp. 100.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cupcake Chocolate</td>
                                            <td>Cupcake</td>
                                            <td>Bebas</td>
                                            <td>4-5 Hari</td>
                                            <td>2023/04/26</td>
                                            <td>Rp. 100.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cupcake Fruite</td>
                                            <td>Cupcake</td>
                                            <td>Bebas</td>
                                            <td>4-5 Hari</td>
                                            <td>2023/04/27</td>
                                            <td>Rp. 100.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cupcake Matcha</td>
                                            <td>Cupcake</td>
                                            <td>Bebas</td>
                                            <td>4-5 Hari</td>
                                            <td>2023/04/28</td>
                                            <td>Rp. 100.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Birthday Butterfly</td>
                                            <td>Cake Birthday</td>
                                            <td>Bebas</td>
                                            <td>6-7 Hari</td>
                                            <td>2023/05/20</td>
                                            <td>Rp. 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Birthday Simple</td>
                                            <td>Cake Birthday</td>
                                            <td>Bebas</td>
                                            <td>6-7 Hari</td>
                                            <td>2023/05/21</td>
                                            <td>Rp. 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Birthday Gulali</td>
                                            <td>Cake Birthday</td>
                                            <td>Bebas</td>
                                            <td>6-7 Hari</td>
                                            <td>2023/05/22</td>
                                            <td>Rp. 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Birthday Emas</td>
                                            <td>Cake Birthday</td>
                                            <td>Bebas</td>
                                            <td>6-7 Hari</td>
                                            <td>2023/05/20</td>
                                            <td>Rp. 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Pernikahan</td>
                                            <td>Cake pernikahan</td>
                                            <td>Bebas</td>
                                            <td>H-2 Bulan</td>
                                            <td>2023/06/23</td>
                                            <td>Start from Rp. 1.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cake Box</td>
                                            <td>Cake Box</td>
                                            <td>Bebas</td>
                                            <td>3-4 Hari</td>
                                            <td>2023/07/13</td>
                                            <td>Start From Rp. 50.000</td>
                                        </tr>
                                        <tr>
                                            <td>Rice Box</td>
                                            <td>Rice Box</td>
                                            <td>Bebas</td>
                                            <td>H-20 Hari</td>
                                            <td>2023/08/19</td>
                                            <td>Start From Rp. 30.000</td>
                                        </tr>
                                        <tr>
                                            <td>Cetring Prasmanan</td>
                                            <td>Prasmanan</td>
                                            <td>Bebas</td>
                                            <td>H-3 bulan acara</td>
                                            <td>2023/03/03</td>
                                            <td>Start from Rp. 30.000.000</td>
                                        </tr>
                                        <tr>
                                            <td>Dekorasi Birthday</td>
                                            <td>Dekorasi</td>
                                            <td>Bebas</td>
                                            <td>H-3 bulan acara</td>
                                            <td>2023/10/16</td>
                                            <td>Start From Rp. 1.500.000</td>
                                        </tr>
                                        <tr>
                                            <td>Dekorasi Pernikahan</td>
                                            <td>Dekorasi</td>
                                            <td>Bebas</td>
                                            <td>H-6 Bulan acara</td>
                                            <td>2023/12/18</td>
                                            <td>Start From Rp. 40.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
</div>
@endsection