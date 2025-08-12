@push('footer')
@if (session('message'))
<script>
    setTimeout(function() {
        let msg = document.getElementById('msg');
        msg.style.display = 'none';
    }, 9000);
</script>
@endif

@endpush
@extends('layouts.app')
@section('title', 'Book Laundry Online in Dubai & Abu Dhabi')
@section('description','LaundryService.AE has made it quite easy to book a laundry service with your favorite laundry in Abu Dhabi, Dubai, Sharjah & Ajman. Its quite simple, hassle free, fill form, schedule date & convenient time and submit. Leave rest of the things on our experts!')
@section('og:title', 'Book Laundry Online in Dubai & Abu Dhabi')
@section('og:description','LaundryService.AE has made it quite easy to book a laundry service with your favorite laundry in Abu Dhabi, Dubai, Sharjah & Ajman. Its quite simple, hassle free, fill form, schedule date & convenient time and submit. Leave rest of the things on our experts!')
@section('og:url', 'https://www.laundryservice.ae/book-laundry-online')
@section('canonical', 'https://www.laundryservice.ae/book-laundry-online')
@section('styles')
<style>
    img.aed {
        height: 0.7em;
        width: auto;
        vertical-align: 0.01em;
        content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMzMzMzMzMgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
    }

    img.aed2 {
        height: 0.7em;
        width: auto;
        vertical-align: 0.01em;
        content: url("data:image/svg+xml; base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMDAgODcwIiB3aWR0aD0iMTAwMCIgaGVpZ2h0PSI4NzAiPgoJPHRpdGxlPkxheWVyIGNvcHk8L3RpdGxlPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6ICMyQjJGN0IgfSAKCTwvc3R5bGU+Cgk8cGF0aCBpZD0iTGF5ZXIgY29weSIgY2xhc3M9InMwIiBkPSJtODguMyAxYzAuNCAwLjYgMi42IDMuMyA0LjcgNS45IDE1LjMgMTguMiAyNi44IDQ3LjggMzMgODUuMSA0LjEgMjQuNSA0LjMgMzIuMiA0LjMgMTI1LjZ2ODdoLTQxLjhjLTM4LjIgMC00Mi42LTAuMi01MC4xLTEuNy0xMS44LTIuNS0yNC05LjItMzIuMi0xNy44LTYuNS02LjktNi4zLTcuMy01LjkgMTMuNiAwLjUgMTcuMyAwLjcgMTkuMiAzLjIgMjguNiA0IDE0LjkgOS41IDI2IDE3LjggMzUuOSAxMS4zIDEzLjYgMjIuOCAyMS4yIDM5LjIgMjYuMyAzLjUgMSAxMC45IDEuNCAzNy4xIDEuNmwzMi43IDAuNXY0My4zIDQzLjRsLTQ2LjEtMC4zLTQ2LjMtMC4zLTgtMy4yYy05LjUtMy44LTEzLjgtNi42LTIzLjEtMTQuOWwtNi44LTYuMSAwLjQgMTkuMWMwLjUgMTcuNyAwLjYgMTkuNyAzLjEgMjguNyA4LjcgMzEuOCAyOS43IDU0LjUgNTcuNCA2MS45IDYuOSAxLjkgOS42IDIgMzguNSAyLjRsMzAuOSAwLjR2ODkuNmMwIDU0LjEtMC4zIDk0LTAuOCAxMDAuOC0wLjUgNi4yLTIuMSAxNy44LTMuNSAyNS45LTYuNSAzNy4zLTE4LjIgNjUuNC0zNSA4My42bC0zLjQgMy43aDE2OS4xYzEwMS4xIDAgMTc2LjctMC40IDE4Ny44LTAuOSAxOS41LTEgNjMtNS4zIDcyLjgtNy40IDMuMS0wLjYgOC45LTEuNSAxMi43LTIuMSA4LjEtMS4yIDIxLjUtNCA0MC44LTguOSAyNy4yLTYuOCA1Mi0xNS4zIDc2LjMtMjYuMSA3LjYtMy40IDI5LjQtMTQuNSAzNS4yLTE4IDMuMS0xLjggNi44LTQgOC4yLTQuNyAzLjktMi4xIDEwLjQtNi4zIDE5LjktMTMuMSA0LjctMy40IDkuNC02LjcgMTAuNC03LjQgNC4yLTIuOCAxOC43LTE0LjkgMjUuMy0yMSAyNS4xLTIzLjEgNDYuMS00OC44IDYyLjQtNzYuMyAyLjMtNCA1LjMtOSA2LjYtMTEuMSAzLjMtNS42IDE2LjktMzMuNiAxOC4yLTM3LjggMC42LTEuOSAxLjQtMy45IDEuOC00LjMgMi42LTMuNCAxNy42LTUwLjYgMTkuNC02MC45IDAuNi0zLjMgMC45LTMuOCAzLjQtNC4zIDEuNi0wLjMgMjQuOS0wLjMgNTEuOC0wLjEgNTMuOCAwLjQgNTMuOCAwLjQgNjUuNyA1LjkgNi43IDMuMSA4LjcgNC41IDE2LjEgMTEuMiA5LjcgOC43IDguOCAxMC4xIDguMi0xMS43LTAuNC0xMi44LTAuOS0yMC43LTEuOC0yMy45LTMuNC0xMi4zLTQuMi0xNC45LTcuMi0yMS4xLTkuOC0yMS40LTI2LjItMzYuNy00Ny4yLTQ0bC04LjItMy0zMy40LTAuNC0zMy4zLTAuNSAwLjQtMTEuN2MwLjQtMTUuNCAwLjQtNDUuOS0wLjEtNjEuNmwtMC40LTEyLjYgNDQuNi0wLjJjMzguMi0wLjIgNDUuMyAwIDQ5LjUgMS4xIDEyLjYgMy41IDIxLjEgOC4zIDMxLjUgMTcuOGw1LjggNS40di0xNC44YzAtMTcuNi0wLjktMjUuNC00LjUtMzctNy4xLTIzLjUtMjEuMS00MS00MS4xLTUxLjgtMTMtNy0xMy44LTcuMi01OC41LTcuNS0yNi4yLTAuMi0zOS45LTAuNi00MC42LTEuMi0wLjYtMC42LTEuMS0xLjYtMS4xLTIuNCAwLTAuOC0xLjUtNy4xLTMuNS0xMy45LTIzLjQtODIuNy02Ny4xLTE0OC40LTEzMS0xOTcuMS04LjctNi43LTMwLTIwLjgtMzguNi0yNS42LTMuMy0xLjktNi45LTMuOS03LjgtNC41LTQuMi0yLjMtMjguMy0xNC4xLTM0LjMtMTYuNi0zLjYtMS42LTguMy0zLjYtMTAuNC00LjQtMzUuMy0xNS4zLTk0LjUtMjkuOC0xMzkuNy0zNC4zLTcuNC0wLjctMTcuMi0xLjgtMjEuNy0yLjItMjAuNC0yLjMtNDguNy0yLjYtMjA5LjQtMi42LTEzNS44IDAtMTY5LjkgMC4zLTE2OS40IDF6bTMzMC43IDQzLjNjMzMuOCAyIDU0LjYgNC42IDc4LjkgMTAuNSA3NC4yIDE3LjYgMTI2LjQgNTQuOCAxNjQuMyAxMTcgMy41IDUuOCAxOC4zIDM2IDIwLjUgNDIuMSAxMC41IDI4LjMgMTUuNiA0NS4xIDIwLjEgNjcuMyAxLjEgNS40IDIuNiAxMi42IDMuMyAxNiAwLjcgMy4zIDEgNi40IDAuNyA2LjctMC41IDAuNC0xMDAuOSAwLjYtMjIzLjMgMC41bC0yMjIuNS0wLjItMC4zLTEyOC41Yy0wLjEtNzAuNiAwLTEyOS4zIDAuMy0xMzAuNGwwLjQtMS45aDcxLjFjMzkgMCA3OCAwLjQgODYuNSAwLjl6bTI5Ny41IDM1MC4zYzAuNyA0LjMgMC43IDc3LjMgMCA4MC45bC0wLjYgMi43LTIyNy41LTAuMi0yMjcuNC0wLjMtMC4yLTQyLjRjLTAuMi0yMy4zIDAtNDIuNyAwLjItNDMuMSAwLjMtMC41IDk3LjItMC44IDIyNy43LTAuOGgyMjcuMnptLTEwLjIgMTcxLjdjMC41IDEuNS0xLjkgMTMuOC02LjggMzMuOC01LjYgMjIuNS0xMy4yIDQ1LjItMjAuOSA2Mi0zLjggOC42LTEzLjMgMjcuMi0xNS42IDMwLjctMS4xIDEuNi00LjMgNi43LTcuMSAxMS4yLTE4IDI4LjItNDMuNyA1My45LTczIDcyLjktMTAuNyA2LjgtMzIuNyAxOC40LTM4LjYgMjAuMi0xLjIgMC4zLTIuNSAwLjktMyAxLjMtMC43IDAuNi05LjggNC0yMC40IDcuOC0xOS41IDYuOS01Ni42IDE0LjQtODYuNCAxNy41LTE5LjMgMS45LTIyLjQgMi05Ni43IDJoLTc2Ljl2LTEyOS43LTEyOS44bDIyMC45LTAuNGMxMjEuNS0wLjIgMjIxLjYtMC41IDIyMi40LTAuNyAwLjktMC4xIDEuOCAwLjUgMi4xIDEuMnoiLz4KPC9zdmc+");
    }

    .bdg1 {
        background-color: rgba(100, 149, 237, 0.15);
        color: #2c3e50;
        border: 1px solid rgba(100, 149, 237, 0.3);
        border-radius: 6px;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .address-type-container {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .address-type-option {
        flex: 1;
        position: relative;
    }

    .address-type-option input[type="radio"] {
        display: none;
    }

    .address-type-option label {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: all 0.3s ease;
    }

    .address-type-option input[type="radio"]:checked+label {
        background-color: #e7f5ff;
        border-color: #2B2F7B;
        color: #2B2F7B;
    }

    .map-container {
        position: relative;
        height: 400px;
        border-radius: 8px;
        overflow: hidden;
        margin-top: 1rem;
    }

    .pin-instruction {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: white;
        padding: 10px 20px;
        border-radius: 50px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .icon {
        width: 20px;
        height: 20px;
    }


    .search-input {
        border: 1px solid #dee2e6;
        border-radius: 4px;
        padding: 12px;
        width: 100%;
        font-size: 1rem;
    }

    .progress-step {
        padding: 15px;
        border-bottom: 1px solid #dee2e6;
    }

    .progress-step svg {
        color: #6c757d;
        margin-right: 10px;
    }

    .progress-step.selected {
        cursor: pointer;
    }

    .next-button {
        background-color: #dee2e6;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 15px;
        width: 100%;
        font-weight: 500;
    }

    .selectable.active {
        background-color: #e7f5ff;
        border-color: #2B2F7B;
        color: #2B2F7B;
    }

    .selectable.active p {
        color: #2B2F7B
    }

    .selectable {
        cursor: pointer;
    }

    .modal-lg {
        max-width: 1500px
    }

    .items {
        border: 1px solid #52495a !important;
        padding: 10px;
        width: 48%;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .ticket-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 2px dashed #bdc3c7;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .ticket-table th,
    .ticket-table td {
        padding: 9px;
        text-align: left;
        border-bottom: 1px dashed #bdc3c7;
    }

    .ticket-table thead {
        background-color: #f1f3f5;
    }

    .ticket-table th {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
        color: #2c3e50;
    }

    .ticket-table tbody tr:last-child td {
        border-bottom: none;
    }

    .total-price {
        font-weight: bold;
        text-align: right;
        margin-top: 10px;
    }

    .itemModel {
        padding-right: 0px !important;
    }

    .table thead th {
        text-align: center;
    }

    .ticket-table tbody tr td {
        text-align: center;
    }

    .incDec {
        width: 20% !important;
    }

    @media (max-width: 767px) {
        .col-md-6 {
            border-right: none !important;
        }

        .modal-dialog {
            max-width: 100%;
            margin: 0;
        }

        .modal-content {
            height: 100%;
            overflow-y: auto;
        }

        .modal-body {
            padding: 10px;
            margin-bottom: 20px;
        }

        .modal-header h5 {
            font-size: 1.2rem;
        }

        .btn.category-btn {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            border-spacing: 8px 10px !important;
        }

        .fw-bold {
            font-weight: 500px !important;
            font-size: 14px !important;
        }

        .model-cate {

            text-align: center;
        }

        .table thead th {
            vertical-align: middle;
            font-size: 12px;
        }

        .ticket-table tbody tr td {
            font-size: 14px;
        }

        .ticket-table th,
        .ticket-table td {
            padding: 4px
        }

        .ticket-table {
            border-collapse: collapse
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.25rem 0.25rem;
        }

        .quantity {
            margin-right: 0px !important;
            margin-left: 0px !important;
        }

        @media (max-width: 480px) {
            .text-end {
                font-size: 11px;
            }

            .fw-bold {
                font-size: 11px;
            }
        }




    }
</style>
@endsection
@section('content')


<main class="container py-4 mt-5">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-8">
            <div class="step-address" data-step="1">
                <h1 class="mb-4">Find your address</h1>
                <input type="text" class="search-input mb-3" name="address" placeholder="Search for address or building">
                <input type="hidden" name="lat" id="">
                <input type="hidden" name="lng" id="">

                <div class="address-map d-none">
                    <h3 class="mb-3" style="font-size: 22px;">Choose address type</h3>
                    <!-- Address Type Selection -->
                    <div class="address-type-container">
                        <div class="address-type-option">
                            <input type="radio" id="home" name="address-type" checked>
                            <label for="home">Home</label>
                        </div>
                        <div class="address-type-option">
                            <input type="radio" id="office" name="address-type">
                            <label for="office">Office</label>
                        </div>
                        <div class="address-type-option">
                            <input type="radio" id="hotel" name="address-type">
                            <label for="hotel">Hotel</label>
                        </div>
                    </div>

                    <!-- Address Details Input -->
                    <div class="mb-4">
                        <input type="text" name="info" class="form-control form-control-lg address-details" placeholder="Add address details (apartment name, number, floor ...)">
                    </div>

                    <h4 class="mb-3">Confirm building entrance</h4>

                    <!-- Map Container -->
                    <div class="map-container">
                        <div id="map" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>
            <div class="step-collection" data-step="2" style="display: none;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body p-0">
                            <div class="row pb-2" style="border-bottom: dashed 1px;">
                                <div class="col-12">
                                    <h3 class="pb-2 d-flex">Collection Time</h3>
                                    <div class="col-md-12 pl-0">
                                        <div class="form-group mb-3">
                                            <label>Select Day</label>
                                            <input class="form-control" type="text" id="collectDay" name="collectDay">
                                        </div>
                                    </div>
                                    <div class="col-md-12 pl-0">
                                        <div class="form-group mb-3">
                                            <label>Select Time</label>
                                            <input class="form-control" type="text" id="collectTime" name="collectTime">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h3 class="pb-2 d-flex">Collection Instructions</h3>
                                    <div class="row pt-3 pr-3">
                                        <input type="hidden" id="delivery_option_2" name="delivery_option_2" value="Collect from outside">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable" data-group="collection" data-value="Collect from me in person">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-person fa-3x"></i>
                                                    <p class="mt-2 mb-0">Collect from me in person</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable active" data-group="collection" data-value="Collect from outside">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-walking fa-3x"></i>

                                                    <p class="mt-2 mb-0">Collect from outside</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable" data-group="collection" data-value="Collect from reception">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-building fa-3x"></i>
                                                    <p class="mt-2 mb-0">Collect from reception</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 pb-2" style="border-bottom: dashed 1px;">
                                <div class="col-12">
                                    <h3 class="pb-2 d-flex">Deliver Time</h3>
                                    <div class="col-md-12 pl-0">
                                        <div class="form-group mb-3">
                                            <label>Select Day</label>
                                            <input class="form-control" type="text" id="dlvrDay" name="dlvrDay">
                                        </div>
                                    </div>
                                    <div class="col-md-12 pl-0">
                                        <div class="form-group mb-3">
                                            <label>Select Time</label>
                                            <input class="form-control" type="text" id="dlvrTime" name="dlvrTime">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h3 class="pb-2 d-flex">Deliver Instructions</h3>
                                    <div class="row pt-3 pr-md-3">
                                        <input type="hidden" id="delivery_option_1" name="delivery_option_1" value="Collect from outside">
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3 ">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable" data-group="delivery" data-value="Leave at the door">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-person fa-3x"></i>
                                                    <p class="mt-2 mb-0">Leave at the door</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable active" data-group="delivery" data-value="Deliver at the reception">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-suitcase-rolling fa-3x"></i>


                                                    <p class="mt-2 mb-0">Deliver at the reception</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 pr-md-0 pb-md-0 pb-3">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable" data-group="delivery" data-value="Deliver to me in person">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-building fa-3x"></i>

                                                    <p class="mt-2 mb-0">Deliver to me in person</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 pb-2">
                                <h3 class="col-md-6 col-12 pb-2 d-flex">Special Instructions</h3>
                                <h4 class="col-md-6 pb-2 d-flex d-md-block d-none">Frequency</h4>

                                <div class="col-md-6 col-12" style="border-right: dashed 1px black;">
                                    <div class="form-group mb-0">
                                        <textarea class="form-control txtarea" type="textarea" name="specialInstruction" style="height: 149px;"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" id="freq" name="freq" value="Just Once">
                                <div class="col-md-6 col-12">
                                    <h3 class="p-2 d-flex d-md-none d-block">Frequency</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 selectable active" data-group="freq" data-value="Just Once">
                                                <div class="text-center p-3">
                                                    <p class="mt-2 mb-0">Just Once</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4 selectable" data-group="freq" data-value="Weekly">
                                                <div class="text-center p-3">
                                                    <p class="mt-2 mb-0">Weekly</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-md-0 mb-4 selectable" data-group="freq" data-value="Every Two Weeks">
                                                <div class="text-center p-3">
                                                    <p class="mt-2 mb-0">Every Two Weeks</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-md-0 mb-4 selectable" data-group="freq" data-value="Every Four Weeks">
                                                <div class="text-center p-3">
                                                    <p class="mt-2 mb-0">Every Four Weeks</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-services" data-step="3" style="display: none;">
                <div class="row">
                    <div class="col-md-12 px-3">
                        <div class="card-body p-md-2 p-0">
                            <div class="col-12 pb-2">
                                <div class="row pt-2">
                                    @foreach($categories as $index => $category)
                                    @php
                                    $paddingClass = ($index % 2 == 0) ? 'pl-md-0' : 'pr-md-0';
                                    @endphp
                                    <div class="col-md-6 col-sm-6 {{ $paddingClass }}">
                                        <div class="card card-icon-bg o-hidden mb-4">
                                            <div class="card-body d-flex align-items-center">
                                                <!-- Circular Icon -->
                                                <div class="icon-circle">
                                                    <i class="{{ $category['icon'] }}"></i>
                                                </div>
                                                <div class="ml-3 flex-grow-1">
                                                    <!-- Category Details -->
                                                    <p class="text-24 font-weight-bold line-height-1 mb-1">{{ $category['name'] }}</p>

                                                    <div class="d-flex flex-wrap mb-2 p-2">
                                                        <span class="bdg1 me-1 p-1">WASH</span>
                                                        <span class="bdg1 me-1 p-1">TUMBLE-DRY</span>
                                                        <span class="bdg1 p-1">IN A BAG</span>
                                                    </div>


                                                    <p class="text-muted mb-0">For everyday laundry, bedsheets, and towels.</p>
                                                </div>
                                                <div class="text-right">
                                                    <a class="btn btn-outline-secondary p-2" onclick="openServiceModal('{{ $category['name'] }}')" style="margin-bottom:70px">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-payment" data-step="4" style="display: none;">
                <div class="row">
                    <div class="col-md-12 px-3">
                        <div class="card-body">
                            <div class="row pb-2" style="border-bottom: dashed 1px;">
                                <h3 class="col-md-6 pb-2 d-flex">User Information</h3>
                                <h4 class="col-6 pb-2 d-md-block d-none">Payment Method</h4>
                                <div class="col-md-6 col-12" style="border-right: dashed 1px black;">
                                    <div class="form-group mb-3">
                                        <label>Customer Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Customer Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="Enter Customer Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" name="phone_number" placeholder="Enter Customer Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12" style="margin: auto;">
                                    <h3 class="pb-2 d-block d-md-none">Payment Method</h3>

                                    <input type="hidden" id="payment" name="payment" value="Online Transfer">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-md-0 mb-2">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable active" data-group="payment" data-value="Online Transfer" style="height:165px;align-items:center;justify-content:center">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-credit-card fa-5x"></i>
                                                    <p class="text-muted mt-2 mb-0">Online Transfer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-md-0 mb-2">
                                            <div class="card card-icon-bg card-icon-bg-primary o-hidden selectable" data-group="payment" data-value="Cash On Delivery" style="height:165px;align-items:center;justify-content:center">
                                                <div class="text-center p-3">
                                                    <i class="fa-solid fa-money-bill-wave fa-5x"></i>
                                                    <p class="text-muted mt-2 mb-0">Cash On Delivery</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 p-0">
                                    <div class="border p-3" style="border: 1px solid black;">
                                        <strong class="d-block mb-2">T&C:</strong>
                                        <ul style="margin: 0; padding-left: 30px; font-size: 14px; line-height: 1.6; color:red">
                                            <li>Payment Clear Before Delivery</li>
                                            <li>The Laundry will not be responsible for clothes after 30 days.</li>
                                            <li>Clothing damage or loss within our laundry will be reimbursed to the value of 5 times the service cost.</li>
                                            <li>Linen & bedding, curtains, carpets damage within our laundry will be reimbursed to the value of 2 times the service cost.</li>
                                            <li><strong>For cash on delivery orders, please ensure you have the exact amount as the delivery driver may not have change.</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="card">
                <div class="card-body p-0">
                    <button id="next-step" class="next-button" disabled>NEXT</button>

                    <!-- Progress Steps -->
                    <div class="progress-step" data-value="1">
                        <div class="d-flex align-items-center">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span>Address</span>
                        </div>
                        <!-- Display the selected address here -->
                        <div id="selected-address" class="selected-address" style="margin-left: 28px;">
                            <!-- The selected address will be inserted dynamically here -->
                        </div>
                    </div>
                    <div class="progress-step" data-value="2">
                        <div class="d-flex align-items-center">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span>Collection time</span>
                        </div>
                        <!-- Display the selected address here -->
                        <div id="collection-time-details" class="selected-address" style="margin-left: 28px;">
                            <!-- The selected address will be inserted dynamically here -->
                        </div>
                    </div>
                    <div class="progress-step" data-value="2">
                        <div class="d-flex align-items-center">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span>Delivery time</span>
                        </div>
                        <!-- Display the selected address here -->
                        <div id="delivery-time-details" class="selected-address" style="margin-left: 28px;">
                            <!-- The selected address will be inserted dynamically here -->
                        </div>
                    </div>
                    <div class="progress-step" data-value="3">
                        <div class="d-flex align-items-center">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span>Selected services</span>
                        </div>
                    </div>
                    <div class="progress-step" data-value="4">
                        <div class="d-flex align-items-center">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span>Contact & Payment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade itemModel" id="categoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bgColor text-white text-center">
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left side: Buttons to select category -->
                    <div class="col-md-5 py-4 col-12 mb-3 mb-md-0" style="border-right: 3px black dotted;">
                        <div class="row mb-3">
                            <div class="col-12 model-cate">
                                @foreach ($cats as $index => $category)
                                <button type="button" class="btn btn-outline-secondary p-2 mr-10 category-btn {{ $index === 0 ? 'active' : '' }}" data-value="{{ $category->name }}"
                                    style="width: {{ strlen($category->name) > 10 ? '160px' : '100px' }};">
                                    {{ $category->name }}
                                </button>
                                @endforeach
                                <input type="hidden" id="subCategoryFilter" value="Men">
                                <input type="hidden" id="categorySelect" name="categorySelect">
                            </div>
                        </div>
                        <div class="row" id="modalData">
                            <!-- Dynamic content will be injected here -->
                        </div>
                    </div>
                    <!-- Right side: Selected services and pricing -->
                    <div class="col-md-7  py-4 col-12">
                        <div class="table-responsive"> <!-- Added table-responsive class -->
                            <table class="table ticket-table">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Category</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Inc/Dec</th>
                                    </tr>
                                </thead>
                                <tbody id="selectServices">
                                    <!-- Selected services will be appended here -->
                                </tbody>
                            </table>
                        </div>
                        <h6 id="totalPrice" class="total-price">Estimate Cost: <img class="aed">0.00</h6>
                        <p class="estimate text-center" style="font-size: 12px;color:red"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="saveServicesBtn" class="btn mr-6 btn-outline-secondary p-2">Save Services</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Google Maps API -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1W_7l7ifH1lnRZifQwgc5e612Gu0vOrM&libraries=places&callback=initMap"></script>

<script>
    let input = document.querySelector('.search-input');
    let autocomplete;
    let map;
    let marker;
    let addressDetailsElement = document.querySelector('.address-details');
    let selectedAddressElement = document.querySelector('#selected-address'); // Element to display the selected address
    let currentLocation = null; // To store the current location for 'Home'
    let updatedAddress = ''; // To store the updated address when the pin is moved
    let collectTime = '';
    let deliverTime = '';
    let collectDay = '';
    let delvrDay = ''

    // Add event listeners to the address type radio buttons
    document.querySelectorAll('input[name="address-type"]').forEach((radio) => {
        radio.addEventListener('change', function() {
            if (this.id === 'home') {
                // If 'Home' is selected, restore the updated address
                addressDetailsElement.value = ''; // Show updated address or default to 'Current address'
                addressDetailsElement.placeholder = 'Add address details (apartment name, number, floor ...)';

                // Ensure the marker is visible for Home
                if (currentLocation && marker) {
                    map.setCenter(currentLocation); // Reset map center to the stored location
                    marker.setMap(map); // Show the marker at the stored location
                    marker.setPosition(currentLocation); // Move marker to the stored location
                }
                if (marker) {
                    marker.setMap(map); // Show the marker on the map if 'Home' is selected
                }
            } else if (this.id === 'office') {
                // If 'Office' is selected, clear the input and hide the marker
                addressDetailsElement.value = '';
                addressDetailsElement.placeholder = 'Enter your office address';
                if (marker) {
                    marker.setMap(map); // Show the marker on the map if 'Home' is selected
                }
            } else if (this.id === 'hotel') {
                // If 'Hotel' is selected, change the placeholder and clear the input
                addressDetailsElement.placeholder = 'Enter your hotel room number';
                addressDetailsElement.value = ''; // Clear the input for hotel
                if (marker) {
                    marker.setMap(null); // Hide the marker
                }
            }
        });
    });

    // Initialize map
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: {
                lat: 23.4241,
                lng: 53.8478
            }, // Default center (UAE)
            disableDefaultUI: true
        });

        // Initialize autocomplete
        autocomplete = new google.maps.places.Autocomplete(input, {
            componentRestrictions: {
                country: 'ae'
            }, // Limit search to UAE
            fields: ['formatted_address', 'geometry', 'name', 'place_id'], // Limit fields to necessary ones
            types: ['address'] // Only addresses will appear
        });

        // Add listener to autocomplete
        autocomplete.addListener('place_changed', function() {
            let place = autocomplete.getPlace();
            if (!place.geometry) {
                console.log("No details available for input: '" + place.name + "'");
                return;
            }

            // Show the address-map div
            document.querySelector('.address-map').classList.remove('d-none');

            map.setCenter(place.geometry.location);
            map.setZoom(15);

            if (marker) {
                marker.setMap(null); // Remove the old marker if it exists
            }

            // Only show marker if "Home" tab is selected
            if (document.querySelector('#home').checked) {
                marker = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: place.formatted_address,
                    draggable: true
                });

                // Update address when the marker is moved
                google.maps.event.addListener(marker, 'dragend', function() {
                    let newPosition = marker.getPosition();
                    updateAddress(newPosition);
                });
            }

            if (document.querySelector('#office').checked) {
                marker = new google.maps.Marker({
                    position: place.geometry.location,
                    map: map,
                    title: place.formatted_address,
                    draggable: true
                });

                // Update address when the marker is moved
                google.maps.event.addListener(marker, 'dragend', function() {
                    let newPosition = marker.getPosition();
                    updateAddress(newPosition);
                });
            }

            let lat = place.geometry.location.lat();
            let lng = place.geometry.location.lng();
            let address = place.formatted_address;

            document.querySelector('input[name="lat"]').value = lat;
            document.querySelector('input[name="lng"]').value = lng;
            // Update the address details dynamically
            selectedAddressElement.textContent = place.formatted_address;
            // Change the circle and button color once the address is selected
            updateProgressStep();
            sendAddressData(lat, lng, address);
        });
    }

    // Function to update the address details after the marker is moved
    function updateAddress(location) {
        let geocoder = new google.maps.Geocoder();
        geocoder.geocode({
            'location': location
        }, function(results, status) {
            if (status === 'OK' && results[0]) {
                let newAddress = results[0].formatted_address;
                console.log('Updated Address:', newAddress);
                updatedAddress = newAddress;

                // Display the new address only if 'Home' tab is active
                if (document.querySelector('#home').checked) {
                    addressDetailsElement.value = newAddress; // Assuming you have an input or field to show the address
                }
                if (document.querySelector('#office').checked) {
                    addressDetailsElement.value = newAddress; // Assuming you have an input or field to show the address
                }
            } else {
                console.log('Geocode was unsuccessful for the following reason: ' + status);
            }
        });
    }

    // Function to update the progress step and button color
    function updateProgressStep() {
        // Add the 'selected' class to the Address progress step
        const addressStep = document.querySelector('.progress-step');
        addressStep.classList.add('selected');

        // Change the circle color
        const circle = addressStep.querySelector('.d-flex svg');
        circle.setAttribute('fill', '#2B2F7B'); // Update to the desired color

        // Change the Next button color
        const nextButton = document.querySelector('.next-button');
        nextButton.style.backgroundColor = '#2B2F7B'; // Update button color
        nextButton.style.borderColor = '#2B2F7B'; // Update button border color

        // Enable the button
        nextButton.disabled = false; // Enable the Next button
    }

    function sendAddressData(lat, lng, address) {
        $.ajax({
            url: '/get-dateTime', // Make sure this URL matches the route defined
            type: 'POST',
            data: {
                lat: lat,
                lng: lng,
                address: address,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for security
            },
            success: function(response) {
                console.log('Address and coordinates sent successfully:', response);

                if (response.success) {
                    // Handle successful response
                    console.log('Available times:', response.address);

                    // Set the collect day and time
                    $('#collectDay').val(response.times.collectDay);
                    $('#collectTime').val(response.times.collectTime);

                    // Set the delivery day and time
                    $('#dlvrDay').val(response.times.dlvrDay);
                    $('#dlvrTime').val(response.times.dlvrTime);

                    collectDay = response.times.collectDay;
                    collectTime = response.times.collectTime;
                    delvrDay = response.times.dlvrDay;
                    deliverTime = response.times.dlvrTime;

                }
            },
            error: function(error) {
                console.log('Error sending address:', error);
            }
        });
    }

    $(document).ready(function() {
        // Step navigation
        $('.progress-step').click(function() {
            var stepNumber = $(this).data('value');
            if ($(this).hasClass('selected')) {
                $('.step-address, .step-collection, .step-services, .step-payment').hide();
                $('.step-address[data-step="' + stepNumber + '"], .step-collection[data-step="' + stepNumber + '"], .step-services[data-step="' + stepNumber + '"], .step-payment[data-step="' + stepNumber + '"]').show();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Set initial step visibility
        $('[data-step="1"]').fadeIn(300);
        $('[data-step="2"], [data-step="3"], [data-step="4"]').hide();

        // Handle Next Step
        $('#next-step').click(function() {
            // Get the current step
            let currentStep = parseInt(
                $('.step-address:visible, .step-collection:visible, .step-services:visible, .step-payment:visible').attr('data-step')
            );

            if ($(this).text() === 'Submit') {
                const data = {
                    address: $('input[name="address"]').val(),
                    lat: $('input[name="lat"]').val(),
                    lng: $('input[name="lng"]').val(),
                    info: $('input[name="info"]').val(),
                    collectDay: $('input[name="collectDay"]').val(),
                    collectTime: $('input[name="collectTime"]').val(),
                    dlvrDay: $('input[name="dlvrDay"]').val(),
                    dlvrTime: $('input[name="dlvrTime"]').val(),
                    delivery_option_2: $('input[name="delivery_option_2"]').val(),
                    delivery_option_1: $('input[name="delivery_option_1"]').val(),
                    specialInstruction: $('input[name="specialInstruction"]').val(),
                    freq: $('input[name="freq"]').val(),
                    name: $('input[name="name"]').val(),
                    email: $('input[name="email"]').val(),
                    phone_number: $('input[name="phone_number"]').val(),
                    payment: $('input[name="payment"]').val(),
                    services: JSON.parse(localStorage.getItem('servicesArray')) // Add servicesArray here
                };

                // Validate required fields
                const errors = [];
                if (!data.address) errors.push('Address is required');
                if (!data.collectDay || !data.collectTime) errors.push('Collection date and time are required');
                if (!data.dlvrDay || !data.dlvrTime) errors.push('Delivery date and time are required');
                if (!data.name) errors.push('Customer name is required');
                if (!data.phone_number) errors.push('Phone number is required');
                if (!data.email) errors.push('Email is required');
                if (!data.payment) errors.push('Payment method is required');

                if (errors.length > 0) {
                    alert(`Please fill the following inputs:\n- ${errors.join('\n- ')}`);
                    return;
                }

                // Log data (for debugging purposes)
                console.log('Submitting Data:', data);

                // Send data via AJAX
                $.ajax({
                    url: "/create-order",
                    type: 'POST',
                    data: data, // Pass the entire data object here
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Adding CSRF token header
                    },
                    success: function(response) {
                        console.log('Success:', response);
                        let bookingId = response.bookingId;
                        if (bookingId) {
                            window.location.href = 'thank_you/' + bookingId;
                        } else {
                            console.error('Booking ID not found in response');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors during the AJAX request
                        console.error('Error:', error);
                        alert('There was an error submitting your data. Please try again later.');
                    }
                });
            }

            // Step 1 Validation: Address Details
            if (currentStep === 1) {
                const addressDetails = $('.search-input').val();
                if (!addressDetails) {
                    alert('Please enter the address details!');
                    return;
                }

                // Ensure collection and delivery time details are set
                if (collectTime && deliverTime) {
                    $('#collection-time-details').text(`${collectDay} / ${collectTime}`).fadeIn();
                    $('#delivery-time-details').text(`${delvrDay} / ${deliverTime}`).fadeIn();

                    const collectionStep = document.querySelectorAll('.progress-step')[1];
                    const deliveryStep = document.querySelectorAll('.progress-step')[2];
                    collectionStep.classList.add('selected');
                    deliveryStep.classList.add('selected');

                    // Change the color of the circles
                    collectionStep.querySelector('svg path').setAttribute('fill', '#2B2F7B');
                    deliveryStep.querySelector('svg path').setAttribute('fill', '#2B2F7B');
                }
            }

            // Step 2 Validation: Collection and Delivery Details
            if (currentStep === 2) {
                const collectDay = $('#collectDay').val();
                const collectTime = $('#collectTime').val();
                const dlvrDay = $('#dlvrDay').val();
                const dlvrTime = $('#dlvrTime').val();

                if (!collectDay || !collectTime || !dlvrDay || !dlvrTime) {
                    alert('Please fill all the collection and delivery fields!');
                    return;
                }
            }

            // Step Transition
            let nextStep = currentStep + 1;

            // Prevent moving to Step 4 if Step 3 isn't completed
            if (nextStep === 4) {
                const progressSteps = document.querySelectorAll('.progress-step');
                const thirdStepCircle = progressSteps[3]?.querySelector('svg path');

                if (thirdStepCircle && thirdStepCircle.getAttribute('fill') === '#2B2F7B') {
                    $('#next-step').text('Submit');

                    const laststep = document.querySelectorAll('.progress-step')[4]; // Adjust the index for the step
                    laststep.classList.add('selected');

                    const fourthStepCircle = progressSteps[4]?.querySelector('svg path');
                    if (fourthStepCircle) {
                        fourthStepCircle.setAttribute('fill', '#2B2F7B');
                    }
                } else {
                    alert('Please select at least one item before proceeding.');
                    return; // Prevent further execution
                }
            } else {
                $('#next-step').text('Next');
            }

            // Handle step transitions
            $(`[data-step="${currentStep}"]`).fadeOut(300); // Hide current step
            $(`[data-step="${nextStep}"]`).fadeIn(300); // Show next step
        });

        // Handle Selectable Items
        $('.selectable').on('click', function() {
            const group = $(this).data('group');
            $(`.selectable[data-group="${group}"]`).removeClass('active');
            $(this).addClass('active');
            const selectedValue = $(this).data('value');
            $(`#${group === 'collection' ? 'delivery_option_2' : group === 'delivery' ? 'delivery_option_1' : group === 'freq' ? 'freq' : ''}`).val(selectedValue);
        });
    });
</script>
<script>
    // Function to open the modal and fetch services based on category
    function openServiceModal(category) {
        // Set the modal title dynamically based on category
        $('#categoriesModal .modal-title').text(category);
        // Fetch data for the selected category
        $('#categorySelect').val(category);
        $('#subCategoryFilter').val('Men');

        $('.category-btn').removeClass('active');
        $(`.category-btn[data-value="Men"]`).addClass('active');
        serverData(category);

        // Show the modal
        $('#categoriesModal').modal('show');
    }

    document.querySelectorAll('.category-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            var subCategory = this.getAttribute('data-value');

            document.getElementById("subCategoryFilter").value = subCategory;

            var category = document.getElementById("categorySelect").value;
            // Call the serverData function with the selected category
            serverData(category);
        });
    });

    // Function to fetch services for a specific category
    function serverData(category) {
        let mainCategory = $('#categorySelect').val();
        let subCategory = $('#subCategoryFilter').val();

        // Perform an AJAX request to fetch services for the category
        $.ajax({
            url: "/fetch-services", // Laravel route to fetch services
            type: 'POST',
            data: {
                category: category, // Main category
                subCategory: subCategory, // Subcategory (Men/Women/etc.)
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json', // Expecting JSON response
            success: function(response) {
                let html = '';

                // Ensure the response is an array and contains data
                if (Array.isArray(response) && response.length > 0) {
                    html = '<table class="table p-0" style="width: 100%; border-collapse: separate; border-spacing: 17px 10px;">';
                    html += '<tbody>';

                    let openRow = false; // To track if a row is open
                    let cellsInRow = 0; // To count cells in the current row

                    $.each(response, function(index, service) {
                        let price = getServicePrice(service, mainCategory); // Get the price based on category

                        // Only add the item if the price is greater than 0
                        if (price > 0) {
                            // Start a new row if it's not already open
                            if (!openRow) {
                                html += '<tr>';
                                openRow = true;
                                cellsInRow = 0; // Reset cells count
                            }

                            // Add a table cell for the service item
                            html += createServiceItem(service, price, subCategory, mainCategory);

                            cellsInRow++; // Increment cell count

                            // Close the row after two items
                            if (cellsInRow === 2) {
                                html += '</tr>';
                                openRow = false; // Reset for the next row
                            }
                        }
                    });

                    // Close the row if it contains only one item
                    if (openRow && cellsInRow === 1) {
                        html += '<td colspan="2" style="border: 1px solid transparent;"></td>';
                        html += '</tr>';
                    }

                    html += '</tbody>';
                    html += '</table>';
                } else {
                    html = '<p class="ml-3">No services found for this category.</p>';
                }

                // Inject the generated HTML into the modal
                $('#modalData').html(html);
            },
            error: function(error) {
                alert('Error fetching data: ' + error.responseText);
            }
        });
    }

    // Function to determine the price based on the category
    function getServicePrice(service, category) {
        switch (category) {
            case 'Wash':
                return service.W_Price;
            case 'Pressing':
                return service.P_Price;
            case 'Wash & Press':
                return service.WP_Price;
            case 'Dry Clean':
                return service.DC_Price;
            default:
                return 0;
        }
    }
    // Function to create a service item table cell
    function createServiceItem(service, price, category, mainCategory) {
        return `
            <td class="items">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="fw-bold" style="color: #333;">${service.itemName}</span>
                    <div style="display: flex; align-items: center;">
                        <span class="text-end" style="color: #333; margin-right: 5px;"><img class="aed"> ${price}</span>
                        <a href="javascript:void(0);" data-id="${service.id}" data-name="${service.itemName}" data-price="${price}" data-main-category="${mainCategory}" data-category="${category}" class="btn border add-service" style="padding: 0 10px;">+</a>
                    </div>
                </div>
            </td>
        `;
    }

    $(document).on('click', '.add-service', function(e) {
        e.preventDefault();

        var serviceId = $(this).data('id');
        var serviceName = $(this).data('name');
        var servicePrice = parseFloat($(this).data('price'));
        var mainCategory = $(this).data('main-category');
        var category = $(this).data('category');

        // Check if the service is already added
        var existingService = $('#selectServices tr').filter(function() {
            return $(this).data('id') === serviceId &&
                $(this).data('main-category') === mainCategory;
        });

        if (existingService.length > 0) {
            // If already added, increment the quantity and update the price
            var quantityElement = existingService.find('.quantity');
            var currentQuantity = parseInt(quantityElement.text());
            currentQuantity++;
            quantityElement.text(currentQuantity);

            var priceElement = existingService.find('.total-price');
            var newPrice = currentQuantity * servicePrice;
            priceElement.html('<img class="aed"> ' + newPrice.toFixed(2));

        } else {
            // If not already added, append the new service with quantity 1 in table row format
            var selectedServiceHtml = '<tr data-id="' + serviceId + '" data-main-category="' + mainCategory + '" data-category="' + category + '"data-category="' + category + '" data-price="' + servicePrice.toFixed(2) + '" data-itemname="' + serviceName + '">';
            selectedServiceHtml += '    <td>' + mainCategory + '</td>';
            selectedServiceHtml += '    <td>' + category + '</td>';
            selectedServiceHtml += '    <td>' + serviceName + '</td>';
            selectedServiceHtml += '    <td class="total-price"><img class="aed"> ' + servicePrice.toFixed(2) + '</td>';
            selectedServiceHtml += '    <td class="incDec">';
            selectedServiceHtml += '        <a href="javascript:void(0);" data-id="' + serviceId + '" data-price="' + servicePrice + '" class="btn btn-sm btn-outline-secondary decrement-service">-</a>';
            selectedServiceHtml += '        <span class="quantity mx-2">1</span>';
            selectedServiceHtml += '        <a href="javascript:void(0);" data-id="' + serviceId + '" data-price="' + servicePrice + '" class="btn btn-sm btn-outline-secondary increment-service">+</a>';
            selectedServiceHtml += '    </td>';
            selectedServiceHtml += '</tr>';

            $('#selectServices').append(selectedServiceHtml);
        }

        // Update the total price
        updateTotalPrice();
    });

    $(document).on('click', '.increment-service', function(e) {
        e.preventDefault();

        var serviceId = $(this).data('id');
        var servicePrice = parseFloat($(this).data('price'));
        var mainCategory = $(this).closest('tr').data('main-category');
        var category = $(this).closest('tr').data('category');

        // Retrieve the correct row using data attributes for id, mainCategory, and category
        var existingService = $('#selectServices tr').filter(function() {
            return $(this).data('id') === serviceId &&
                $(this).data('main-category') === mainCategory;
        });

        var quantityElement = existingService.find('.quantity');
        var currentQuantity = parseInt(quantityElement.text());
        currentQuantity++;
        quantityElement.text(currentQuantity);

        var priceElement = existingService.find('.total-price');
        var newPrice = currentQuantity * servicePrice;
        priceElement.html('<img class="aed"> ' + newPrice.toFixed(2));


        // Update the total price
        updateTotalPrice();
    });

    $(document).on('click', '.decrement-service', function(e) {
        e.preventDefault();

        var serviceId = $(this).data('id');
        var servicePrice = parseFloat($(this).data('price'));
        var mainCategory = $(this).closest('tr').data('main-category');
        var category = $(this).closest('tr').data('category');

        // Retrieve the correct row using data attributes for id, mainCategory, and category
        var existingService = $('#selectServices tr').filter(function() {
            return $(this).data('id') === serviceId &&
                $(this).data('main-category') === mainCategory;
        });

        var quantityElement = existingService.find('.quantity');
        var currentQuantity = parseInt(quantityElement.text());

        if (currentQuantity > 1) {
            currentQuantity--;
            quantityElement.text(currentQuantity);

            var priceElement = existingService.find('.total-price');
            var newPrice = currentQuantity * servicePrice;
            priceElement.html('<img class="aed"> ' + newPrice.toFixed(2));

        } else {
            // If quantity is 1, remove the service
            existingService.remove();
        }

        // Update the total price
        updateTotalPrice();
    });

    function updateTotalPrice() {
        var totalPrice = 0;
        $('#selectServices .total-price').each(function() {
            totalPrice += parseFloat($(this).text().replace(/[^\d.]/g, ''));

        });
        $('#totalPrice').html('Estimate Cost: <img class="aed1"> ' + totalPrice.toFixed(2));

        $('.estimate').text('Final invoice will be issued once items received & counted.');

    }

    $(document).ready(function() {
        // Save Services Button Click
        $('#saveServicesBtn').on('click', function(e) {
            e.preventDefault();

            const servicesStep = document.querySelectorAll('.progress-step')[3]; // Adjust the index for the step
            servicesStep.classList.add('selected');

            // Change the color of the circle for services time
            const servicesCircle = servicesStep.querySelector('svg path'); // Target the path inside the SVG

            servicesCircle.setAttribute('fill', '#2B2F7B'); // Update to desired color

            // Save the services array to the local storage
            var services = formatServices();
            console.log("Services Array to be saved:", services);

            // Save services array to local storage
            localStorage.setItem('servicesArray', JSON.stringify(services));

            setTimeout(() => {
                $('#categoriesModal').modal('hide');
            }, 1000);
        });

        // Function to format services
        function formatServices() {
            var services = [];
            $('#selectServices tr').each(function() {
                var serviceId = $(this).data('id');
                var mainCategory = $(this).data('main-category');
                var itemName = $(this).data('itemname');
                var quantity = parseInt($(this).find('.quantity').text());
                var price = parseFloat($(this).data('price'));

                var category = $(this).data('category');

                services.push(mainCategory + ":" + category + ":" + itemName + ":" + quantity + ":" + price);
            });
            console.log("Formatted Services Array:", services);
            return services;
        }

    });
</script>

@endsection